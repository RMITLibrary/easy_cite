<?php

require 'vendor/Parsedown.php'; // Ensure the Parsedown.php file is included

function getMarkdownContent($styleguide)
{
	switch ($styleguide) {
		case "styleguide-1":
			return ['markdown/rmitharvard.md', "RMIT Harvard", 'none'];
		case "styleguide-2":
			return ['markdown/aglc4.md', "AGLC4", 'none'];
		case "styleguide-3":
			return ['markdown/apa7thed.md', "APA 7<sup>th</sup> Edition", 'none'];
		case "styleguide-4":
			return ['markdown/chicagoa.md', "Chicago A", 'none'];
		case "styleguide-5":
			return ['markdown/chicagob.md', "Chicago B", 'none'];
		case "styleguide-6":
			return ['markdown/ieee.md', "IEEE", 'none'];
		case "styleguide-7":
			return ['markdown/vancouver.md', "Vancouver", 'none'];
		default:
			return ['markdown/infotab.md', "Using Easy Cite", 'block'];
	}
}

function extractMarkdownData($markdownFile)
{
	$parsedown = new Parsedown(); // Create Parsedown instance
	$markdownContent = file_get_contents($markdownFile);
	$markdownContent = preg_replace('/<!--.*?-->/s', '', $markdownContent);

	$menuItems = extractTypeMenuItems($markdownContent);
	$typeContents = extractTypeContents($markdownContent, $menuItems, $parsedown);

	return [
		'menu' => $menuItems,
		'type_contents' => $typeContents,
	];
}

function extractTypeMenuItems($markdownContent)
{
	$regexTypeMenu = '/###### start-type-menu(.*?)###### end-type-menu/s';
	preg_match($regexTypeMenu, $markdownContent, $matches);

	if (isset($matches[1])) {
		$items = array_filter(array_map('trim', explode("\n", trim($matches[1]))));
		return array_map('cleanTitle', $items);
	}

	return [];
}

function extractTypeContents($markdownContent, $menuItems, $parsedown)
{
	$regexTypeContent = '/###### start-type-content\s*$(.*?)^###### end-type-content\s*$/ms';
	preg_match_all($regexTypeContent, $markdownContent, $matches);

	$typeContents = [];
	foreach ($matches[1] as $index => $content) {
		$subtypes = extractSubtypes($content, $parsedown);
		if (!empty($subtypes)) {
			$title = cleanTitle($menuItems[$index] ?? 'Untitled');
			$typeContents[] = [
				'title' => $title,
				'subtypes' => $subtypes
			];
		}
	}

	return $typeContents;
}

function extractSubtypes($content, $parsedown)
{
	$regexSubtype = '/^###### start-subtype\s*$(.*?)^###### end-subtype\s*$/ms';
	preg_match_all($regexSubtype, $content, $matches);

	$subtypes = [];
	if (isset($matches[1])) {
		foreach ($matches[1] as $subtypeContent) {
			$items = extractSubtypeItems($subtypeContent, $parsedown);
			if (!empty($items)) {
				$subtypes[] = ['items' => $items];
			}
		}
	}

	return $subtypes;
}

function extractSubtypeItems($content, $parsedown)
{
	$regexItem = '/^###### start-subtype-item\s*$(.*?)^###### end-subtype-item\s*$/ms';
	preg_match_all($regexItem, $content, $matches);

	$items = [];
	if (isset($matches[1])) {
		foreach ($matches[1] as $itemContent) {
			$titleParts = explode('###### start-subtype-content', $itemContent, 2);
			$title = isset($titleParts[0]) ? cleanTitle(trim(strip_tags($titleParts[0]))) : '';
			$htmlContent = isset($titleParts[1]) ? $parsedown->text(trim($titleParts[1])) : '';

			// Remove any remaining additional tags
			$htmlContent = cleanHtmlContent($htmlContent);


			if ($title || $htmlContent) {
				$items[] = [
					'title' => $title,
					'content' => $htmlContent
				];
			}
		}
	}

	return $items;
}

function cleanTitle($title)
{
	return trim(preg_replace('/^[#]+/', '', $title));
}

function cleanHtmlContent($content)
{
	// CUSTOM TAGS TO CLASSES
	$content = preg_replace("/{.hanging-indent}/s", '<div class="hanging-indent">', $content);
	$content = preg_replace("/{\/.hanging-indent}/s", '</div>', $content);
	$content = preg_replace("/{.footnote-indent}/s", '<div class="footnote-indent">', $content);
	$content = preg_replace("/{\/.footnote-indent}/s", '</div>', $content);
	$content = preg_replace("/{.ieee-refs}/s", '<div class="ieee-refs">', $content);
	$content = preg_replace("/{\/.ieee-refs}/s", '</div>', $content);
	$content = preg_replace("/{.centre-align}/s", '<p class="centre-align">', $content);
	$content = preg_replace("/{\/.centre-align}/s", '</p>', $content);
	$content = preg_replace("/{.figure-text}/s", '<p class="figure-text">', $content);
	$content = preg_replace("/{\/.figure-text}/s", '</p>', $content);
	$content = preg_replace("/<grey>/s", '<div class="grey">', $content);
	$content = preg_replace("/<\/grey>/s", '</div>', $content);
	$content = preg_replace("/{.desktop-title}/s", '<h1>', $content);
	$content = preg_replace("/{\/.desktop-title}/s", '</h1>', $content);
	$content = preg_replace("/{.mobile-title}/s", '<h1 class="mobile-title">', $content);
	$content = preg_replace("/{\/.mobile-title}/s", '</h1>', $content);
	$content = preg_replace("/{.type-title}/s", '<h2 class="h1">', $content);
	$content = preg_replace("/{\/.type-title}/s", '</h2>', $content);

	// REMOVE EMPTY <P>
	$content = preg_replace("/<p><h1/s", '<h1', $content);
	$content = preg_replace("/<\/h1><\/p>/s", '</h1>', $content);
	$content = preg_replace("/<p><h2/s", '<h2', $content);
	$content = preg_replace("/<\/h2><\/p>/s", '</h2>', $content);

	$content = preg_replace('/<h6>(.*?)<\/h6>/s', '', $content);

	return $content;
}

// Fetch and process markdown data
list($markdownFile, $styleGuideTitle, $showInfobox) = getMarkdownContent(!empty($styleguide) ? $styleguide : 'styleguide-0');
$extractedData = extractMarkdownData($markdownFile);

// Output structured data for debugging
//var_dump($extractedData);
//print_r($extractedData);

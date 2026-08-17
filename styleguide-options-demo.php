<?php
// Standalone comparison page for the style-guide description options.
// NOT part of the site — safe to delete. Served at /styleguide-options-demo.php
include 'includes/functions.php';

$demo_links = [
    ['id' => '2', 'label' => 'AGLC4', 'tag' => 'Law', 'description' => 'The Australian Guide to Legal Citation, used for law and legal studies.'],
    ['id' => '3', 'label' => 'APA 7<sup>th</sup> Edition', 'tag' => 'Psychology & social sciences', 'description' => 'American Psychological Association style, common in psychology, education, nursing and the social sciences.'],
    ['id' => '4', 'label' => 'Chicago A', 'tag' => 'History & humanities', 'description' => 'Chicago\'s footnote (notes–bibliography) system, used in history and the humanities.'],
    ['id' => '5', 'label' => 'Chicago B', 'tag' => 'Sciences', 'description' => 'Chicago\'s author–date system, used in the sciences and social sciences.'],
    ['id' => '6', 'label' => 'IEEE', 'tag' => 'Engineering & IT', 'description' => 'A numbered style used in engineering, electronics and computer science.'],
    ['id' => '1', 'label' => 'RMIT Harvard', 'tag' => 'Multidisciplinary', 'description' => 'An author–date style used broadly across many disciplines at RMIT.'],
    ['id' => '7', 'label' => 'Vancouver', 'tag' => 'Health & medicine', 'description' => 'A numbered style used in medicine, nursing and the health sciences.'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Style guide options — comparison (demo)</title>
    <link rel="icon" href="assets/favicon/favicon.png" type="image/x-icon" />
    <?php include 'includes/head_scripts.php'; ?>
    <style>
        #opts { padding: 2rem 0 4rem; }
        #opts .opt { padding-top: 2rem; margin-top: 2rem; border-top: 1px solid #BFBFBF; }
        #opts .opt:first-of-type { border-top: 0; }
        #opts .opt-note { color: #595959; margin: -0.25rem 0 1rem; }

        /* A / G — info popover button */
        .styleguide-info {
            display: inline-flex; align-items: center; justify-content: center;
            width: 1.5rem; height: 1.5rem; margin-left: 0.5rem; padding: 0; border: 0;
            border-radius: 50%; background: transparent; color: #000054;
            font-size: 1rem; line-height: 1; cursor: pointer;
        }
        .styleguide-info:focus-visible { outline: 2px solid #000054; outline-offset: 2px; }

        /* D / G — discipline tag */
        .styleguide-tag { margin-left: 0.5rem; font-size: 0.875rem; color: #595959; white-space: nowrap; }

        /* B — expandable list */
        .styleguide-details { margin-top: 1rem; }
        .styleguide-details summary { font-size: 1.125rem; font-weight: 500; color: #000054; cursor: pointer; width: fit-content; }
        .styleguide-details__list { margin-top: 1rem; }
        .styleguide-details__list > div { margin-bottom: 0.75rem; }
        .styleguide-details__list .link-large { margin-top: 0; }
        .styleguide-details__list p { margin: 0.1rem 0 0 0; font-size: 0.875rem; color: #333; }

        /* C — always-visible grid */
        #opts .my-grid { list-style: none; gap: 0.75rem 1.5rem; margin: 1rem 0; }
        #opts .my-grid .link-large { margin-top: 0; }
        #opts .my-grid p { margin-top: 0.15rem; color: #333; font-size: 0.875rem; }

        /* H — live side pane */
        @media (min-width: 768px) {
            .styleguide-live { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; align-items: start; }
        }
        .styleguide-live__list li { flex-wrap: wrap; }
        .styleguide-live__inline { display: block; flex: 0 0 100%; margin: 0.15rem 0 0 2.5rem; font-size: 0.875rem; color: #333; }
        @media (min-width: 768px) {
            .styleguide-live__inline { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0 0 0 0); white-space: nowrap; }
            .styleguide-live__pane { transition: transform 0.15s ease; }
            .styleguide-live__pane.has-content {
                display: block; padding: 0.5rem 0.75rem; border-left: 3px solid #E61E2A;
                border-radius: 0.25rem; background: #000054; color: #fff; font-size: 0.875rem;
            }
        }
        .styleguide-live__pane { display: none; }
        @media (prefers-reduced-motion: reduce) { .styleguide-live__pane { transition: none; } }
    </style>
</head>

<body>
    <main class="container" id="opts">
        <h1>Style guide description options</h1>
        <p class="lead">A comparison of ways to surface a short "what it's used for" note per referencing style. This is a throwaway demo page — not the live homepage.</p>

        <section class="opt">
            <h2>Option A — info popover on hover/tap</h2>
            <p class="opt-note">Compact list unchanged; the ⓘ shows the note on hover, keyboard focus or tap.</p>
            <ul class="link-list">
                <?php foreach ($demo_links as $link): $sg = 'styleguide-' . $link['id']; $plain = strip_tags($link['label']); ?>
                    <li>
                        <a href="#" data-styleguide="<?php echo $sg; ?>"><span><?php echo $link['label']; ?></span></a>
                        <button type="button" class="styleguide-info" aria-label="About <?php echo htmlspecialchars($plain); ?>"
                            data-bs-toggle="popover" data-bs-trigger="focus hover" data-bs-placement="right"
                            data-bs-content="<?php echo htmlspecialchars($link['description']); ?>"><span aria-hidden="true">&#9432;</span></button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="opt">
            <h2>Option B — expandable "which style?"</h2>
            <p class="opt-note">List stays compact; a single expander reveals the descriptions.</p>
            <details class="styleguide-details">
                <summary>Which style should I use?</summary>
                <div class="styleguide-details__list">
                    <?php foreach ($demo_links as $link): $sg = 'styleguide-' . $link['id']; ?>
                        <div>
                            <a class="link-large" href="#" data-styleguide="<?php echo $sg; ?>"><?php echo $link['label']; ?></a>
                            <p><?php echo $link['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </details>
        </section>

        <section class="opt">
            <h2>Option C — always-visible grid</h2>
            <p class="opt-note">Descriptions always shown, two columns on desktop.</p>
            <ul class="my-grid">
                <?php foreach ($demo_links as $link): $sg = 'styleguide-' . $link['id']; ?>
                    <li>
                        <a class="link-large" href="#" data-styleguide="<?php echo $sg; ?>"><?php echo $link['label']; ?></a>
                        <p><?php echo $link['description']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="opt">
            <h2>Option D — inline discipline tag</h2>
            <p class="opt-note">A one/two-word discipline label beside each style. Zero added height.</p>
            <ul class="link-list">
                <?php foreach ($demo_links as $link): $sg = 'styleguide-' . $link['id']; ?>
                    <li>
                        <a href="#" data-styleguide="<?php echo $sg; ?>"><span><?php echo $link['label']; ?></span></a>
                        <span class="styleguide-tag"><?php echo $link['tag']; ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="opt">
            <h2>Option G — discipline tag + info popover</h2>
            <p class="opt-note">Tag for instant scanning, ⓘ popover for the full sentence.</p>
            <ul class="link-list">
                <?php foreach ($demo_links as $link): $sg = 'styleguide-' . $link['id']; $plain = strip_tags($link['label']); ?>
                    <li>
                        <a href="#" data-styleguide="<?php echo $sg; ?>"><span><?php echo $link['label']; ?></span></a>
                        <span class="styleguide-tag"><?php echo $link['tag']; ?></span>
                        <button type="button" class="styleguide-info" aria-label="About <?php echo htmlspecialchars($plain); ?>"
                            data-bs-toggle="popover" data-bs-trigger="focus hover" data-bs-placement="right"
                            data-bs-content="<?php echo htmlspecialchars($link['description']); ?>"><span aria-hidden="true">&#9432;</span></button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="opt">
            <h2>Option H — live side pane</h2>
            <p class="opt-note">List left; a navy card on the right tracks the hovered/focused style. On mobile the descriptions show inline instead.</p>
            <div class="styleguide-live">
                <ul class="link-list styleguide-live__list" id="styleguide-h-list">
                    <?php foreach ($demo_links as $link): $sg = 'styleguide-' . $link['id']; $descId = 'h-desc-' . $link['id']; ?>
                        <li>
                            <a href="#" data-styleguide="<?php echo $sg; ?>" data-desc="<?php echo htmlspecialchars($link['description']); ?>" aria-describedby="<?php echo $descId; ?>"><span><?php echo $link['label']; ?></span></a>
                            <span class="styleguide-live__inline" id="<?php echo $descId; ?>"><?php echo $link['description']; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="styleguide-live__pane" id="styleguide-h-pane" aria-hidden="true"></div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof bootstrap !== 'undefined') {
                document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (el) { new bootstrap.Popover(el); });
            }
            var list = document.getElementById('styleguide-h-list');
            var pane = document.getElementById('styleguide-h-pane');
            if (list && pane) {
                var show = function (e) {
                    var a = e.target.closest('a[data-desc]');
                    if (!a) return;
                    pane.textContent = a.getAttribute('data-desc');
                    pane.classList.add('has-content');
                    var lr = list.getBoundingClientRect(), ar = a.getBoundingClientRect();
                    pane.style.transform = 'translateY(' + Math.max(0, ar.top - lr.top + ar.height / 2 - pane.offsetHeight / 2) + 'px)';
                };
                var hide = function (e) {
                    if (e && e.relatedTarget && list.contains(e.relatedTarget)) return;
                    pane.classList.remove('has-content');
                };
                list.addEventListener('mouseover', show);
                list.addEventListener('focusin', show);
                list.addEventListener('mouseleave', hide);
                list.addEventListener('focusout', hide);
            }
            // Demo navigation: send any style link to its guide
            document.addEventListener('click', function (e) {
                var a = e.target.closest('a[data-styleguide]');
                if (a) { e.preventDefault(); location.href = './?styleguide=' + a.getAttribute('data-styleguide'); }
            });
        });
    </script>
</body>

</html>

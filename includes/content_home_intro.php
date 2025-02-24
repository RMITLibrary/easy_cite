<div class="row homepage-intro">

    <!-- START content columns -->
    <div class="col-xxl-7 mx-auto col-xl-8  col-lg-8 o col-md-10  ">
        <h1 class="home-title text-md-center">Welcome to Easy Cite</h1>
        <p class="lead  text-md-center">Easy Cite lets you look up referencing tips and examples in a selection of common
            styles used at RMIT.</p>

        <figure class="video img-left">
            <div class="responsive-video">
                <iframe loading="lazy" src="https://www.youtube.com/embed/1wpCNQycNBw?rel=0&list=PLrvep4LH0G9W74ST7JwffCuC9IkjJy8ih"
                    frameborder="0"
                    allow="autoplay; encrypted-media; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <!-- START accordion item -->
            <div class="accordion-item transcript">
                <p class="accordion-header" id="Transcript-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#Transcript-collapseTwo" aria-expanded="false"
                        aria-controls="Transcript-collapseTwo">
                        Transcript
                    </button>
                </p>
                <div id="Transcript-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="Transcript-headingTwo">
                    <div class="accordion-body">
                        <h2>How to use the Easy Cite referencing tool</h2>
                        <p>Easy Cite is an online tool that provides examples and tips for a wide range of referencing styles used at RMIT.</p>
                        <p>Easy Cite is only intended as a guide as some styles are open to interpretation. You should always check with your teacher or lecturer to make sure you are using the correct style for your assessment tasks. </p>
                        <p>Easy Cite is keyboard and screen-reader accessible, and you can switch between light and dark mode with the buttons near the bottom of the page.</p>
                        <p>The home page has instructions with a video and transcript. Select ‘Easy Cite’ at the top of the page to return here at any time.</p>
                        <p>Select the correct style guide for your assignment or task from the links at the top of the page. </p>
                        <p>Each referencing style begins with an introduction which outlines the general principles of how to use that style. It gives general rules for in-text and reference list citations, and an example of a reference list. Please read these rules carefully.</p>
                        <p>Select the type of source that you need to reference from the right-hand menu, for example: books, journal articles, websites, or audiovisual media such as podcasts and videos. </p>
                        <p>The body of the page provides details about the referencing source sub-type. Select the headings to open information about your specific type of source material, for example: how to cite a book with multiple authors, or how to cite tables and graphs.</p>
                        <p>Each sub-type category provides examples of both in-text and reference list citations.  </p>
                        <p>When using information from a source text, you can express it as a paraphrase or a direct quote.</p>
                        <p>The paraphrasing in-text example is suitable if you are using your own words to express an author’s idea. Paraphrasing is the preferred method of citing information.</p>
                        <p>When directly quoting, you must use the exact words of the author and put them in quotation marks. Keep direct quotes to a minimum.  </p>
                        <p>If you are writing a reference list citation, you must include bibliographic details such as author, year of publication, book title and publisher. Each referencing style requires different elements and formatting. The correct order of these elements is important.</p>
                        <p>Pay close attention to capitalisation, italics, commas and colons, as well as formatting such as hanging indents. These are essential for presenting the citation accurately.</p>
                        <p>Buttons at the bottom of the text allow you to print the whole guide for your referencing style, or just the source type that you need. Send your selection to a printer or save it as a PDF for offline access.</p>
                        <p>You can send feedback about Easy Cite via the link at the bottom of the page.</p>
                        <p>If you need more help with referencing, you can open the ‘Ask the Library’ chat window in the bottom corner of the page or visit the Library’s Referencing help via the link at the top of the page. </p>
                    </div>
                </div>
            </div>
            <!-- END accordion item -->
        </figure>
        <p>Easy Cite includes as many examples of reference types as possible. If the style guides shown
            here do not include your specific reference or citation type, consider applying the format from
            similar types within Easy Cite for your reference and citation, or check the relevant style
            manual.</p>
        <p>Easy Cite is intended as a guide only and some styles are open to interpretation. You should
            always check with your instructor to ensure you are using the correct style for your assignments
            and assessment tasks.</p>
        <nav id="home-section-menu" aria-label="Section Menu">
            <h2 class="h3">Select a style guide</h2>
            <ul class="link-list">
                <?php
                render_menu($menu_links, "");
                ?>
            </ul>
        </nav>


        <blockquote class="complex">
            <a href="https://learninglab.rmit.edu.au/content/referencing" target="_blank" aria-label="Referencing tutorial on Learning Lab. Opens in a new tab.">
                <div class="content">
                    <p class="category">Learning lab</p>
                    <h3>Referencing tutorial</h3>
                    <p>Find out how to correctly use different referencing styles in academic writing to
                        avoid plagiarism and get better marks.</p>
                </div>
            </a>
        </blockquote>
        <div class="row ">
            <div class="col">
                <?php
                include 'includes/theme_switcher.php';
                ?>
            </div>
        </div>
    </div>
    <!-- END content columns -->
</div>
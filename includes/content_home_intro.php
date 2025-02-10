<div class="row homepage-intro">

    <!-- START content columns -->
    <div class="col-xxl-7 mx-auto col-xl-8  col-lg-8 o col-md-10  ">
        <h1 class="home-title text-md-center">Welcome to Easy Cite</h1>
        <p class="lead  text-md-center">Easy Cite lets you look up referencing tips and examples in a selection of common
            styles used at RMIT.</p>

        <figure class="video img-left">
            <div class="responsive-video">
                <img src="./images/youtube-video.jpg" />
                <!-- <iframe src="https://www.youtube.com/embed/60J55xXbu8o" frameborder="0"
                    allowfullscreen=""></iframe> -->
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
                        <p>
                            Easy Cite is an online tool that provides examples and referencing tips for a
                            wide range of styles used at RMIT.
                        </p>
                        <p>
                            Easy Cite is intended as a guide only and some styles are open to
                            interpretation. You should always check with your teacher or lecturer to ensure
                            you are using the correct style for your assessment tasks. 
                        </p>
                        <p>
                            The Easy Cite web page has four sections: 
                        </p>
                        <p>
                            A navigation menu at the top of the screen links to the “How to use Easy Cite”
                            pop-down area. Instructions for using the Easy Cite tool can be found here. You
                            can open or close this area at any time. 
                        </p>
                        <p>
                            A style guide tab menu sits under the navigation menu. This is where you select
                            the correct style guide for your assignment or task. 
                        </p>
                        <p>
                            A source type menu is on the left side of the screen. This is where you select
                            the different types of sources that you need to reference. You may be
                            referencing books, journal articles, websites, audiovisual media such as
                            podcasts or YouTube, or many other types of sources. 
                        </p>
                        <p>
                            The details of the referencing source sub-type sit in the main body of the
                            screen. This provides detailed options about your source material. For example:
                            it shows how to cite a book with multiple authors, or how to cite figures /
                            photos or diagrams you might use in your assignment.
                        </p>
                        <p>
                            Note that each referencing style outlines the general principles of how to use
                            that style. This ‘Using’ tab explains important information about the style. It
                            gives general rules for in-text and reference list citations, and an example of
                            a reference list. Please read these rules carefully.
                        </p>
                        <p>
                            Each sub-type category provides examples of both in-text and reference list
                            citations.  
                        </p>
                        <p>
                            When using information from a source text, you can express it as a direct quote
                            or a paraphrase.
                            When directly quoting, you must use the exact words of the author and put them
                            in quotation marks.
                            Be sure to keep direct quotes to a minimum.  
                            The paraphrase in-text example will be suitable if you’re using your own words
                            to express an author’s idea. Paraphrasing is the preferred method of citing
                            information.
                        </p>
                        <p>
                            If writing a reference list citation, you must have bibliographic details such
                            as author names, year of publication, book title and publisher details.
                        </p>
                        <p>
                            Each different referencing style requires different elements and formatting.
                            Make sure to pay close attention to the order of these elements.
                        </p>
                        <p>
                            Pay attention to the use of capitalisation, italics, commas, and colons, as well
                            as formatting such as hanging indents. These are just as important for
                            presenting the citation accurately.
                        </p>
                        <p>
                            There are three options for printing all or any part of the Easy Cite style
                            guide: print the whole guide for your referencing style; print only the source
                            type that you need, or you can just print the sub-type of your source type
                            material.
                        </p>
                        <p>
                            You can send your selection to a printer for a hard copy or choose to save it as
                            a PDF file for off-line access.
                        </p>
                        <p>
                            You can also send feedback about Easy Cite via the link at the bottom of the
                            page.
                        </p>
                        <p>
                            If you need more help, please visit Ask the Library or the Referencing section
                            of the Learning Lab. </p>
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
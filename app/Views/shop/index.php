<!--     slider-->
<article class="carusel">
    <input type="radio" class="activator" name="carusel" id="A" checked="checked">
    <input type="radio" class="activator" name="carusel" id="B">
    <input type="radio" class="activator" name="carusel" id="C">
    <input type="radio" class="activator" name="carusel" id="D">
    <input type="radio" class="activator" name="carusel" id="E">
    <div class="controls">
        <label for="E" class="control backward"></label>
        <label for="B" class="control forward"></label>
    </div>
    <div class="controls">
        <label for="A" class="control backward"></label>
        <label for="C" class="control forward"></label>
    </div>
    <div class="controls">
        <label for="B" class="control backward"></label>
        <label for="D" class="control forward"></label>
    </div>
    <div class="controls">
        <label for="C" class="control backward"></label>
        <label for="E" class="control forward"></label>
    </div>
    <div class="controls">
        <label for="D" class="control backward"></label>
        <label for="A" class="control forward"></label>
    </div>
    <div class="slides">
        <div class="overflow">
            <div class="items">
                <article class="slide"><img class="pic-to-center pic-parent" src="/assets/images/prod1.jpg"></article>
                <article class="slide"><img class="pic-to-center pic-parent" src="/passets/images/prod2.jpg"></article>
                <article class="slide"><img class="pic-to-center pic-parent" src="/assets/images/prod3.jpg"></article>
                <article class="slide"><img class="pic-to-center pic-parent" src="/assets/images/prod4.jpg"></article>
                <article class="slide"><img class="pic-to-center pic-parent" src="/assets/images/prod5.jpg"></article>
            </div>
            <div class="indicators">
                <label for="A" class="indicator"></label>
                <label for="B" class="indicator"></label>
                <label for="C" class="indicator"></label>
                <label for="D" class="indicator"></label>
                <label for="E" class="indicator"></label>
            </div>
        </div>
    </div>
</article>
<!-- showcase -->
<div class="products">
    <section>
        <div class="row">
            <!--    side bar-->
            <div class="tb-4  sm-categories categories">
                <h5 class="large text_uppercase mt-3">Categories</h5>
                <div class="py2 px-4 mb-3 mt-3"><strong class="medium text_uppercase"></strong>
                    <ul class="medium categories-list">
                        <!--                <li class="incol mb-2 mt-3"><a class="reset_anchor" href="#">Kibble/Dry</a></li>-->
                        <!--                <li class="incol mb-2"><a class="reset_anchor" href="#">Canned</a></li>-->
                        <!--                <li class="incol mb-2"><a class="reset_anchor" href="#">Semi-Moist</a></li>-->

                    </ul>
                </div>
                <!--                <div class="py2 px-4 mb-3 mt-3"><strong class="medium text_uppercase">Premium</strong>-->
                <!--            <ul class="medium">-->
                <!--                <li class="incol mb-2 mt-3"><a class="reset_anchor" href="#">Kibble/Dry</a></li>-->
                <!--                <li class="incol mb-2"><a class="reset_anchor" href="#">Canned</a></li>-->
                <!--                <li class="incol mb-2"><a class="reset_anchor" href="#">Semi-Moist</a></li>-->
                <!--            </ul>-->
                <!--                </div>-->
            </div>

            <!--    main section-->
            <div class="tb-9">
                <div class="row mb-3 align-items-center">
                    <div class="tb-2 mb-2">
                        <p class="mt-3">Showing 1-8 of 100 results</p>
                    </div>
                    <div class="tb-2 mb-2">
                        <ul>
                            <li>
                                <a class="reset-anchor"><i class="fas fa-th-large"></i></a>
                            </li>
                            <li>
                                <a class="reset-anchor"><i class="fas fa-th"></i></a>
                            </li>
                            <li class="reset-anchor">
                                <select name="sorting" id=""
                                        class="selectpicker ml-auto"
                                        data-width="200"
                                        data-styly="bs-select-form-control"
                                        data-title="Default sorting">
                                    <option value="default">Default sorting</option>
                                    <option value="popularity">Popularity</option>
                                    <option value="low-high">Low To High</option>
                                    <option value="high-low">High To Low</option>
                                </select></li>
                        </ul>
                    </div>
                </div>
                <div id="prod" class="row showcase">
                </div>
            </div>
        </div>
    </section>
</div>


@include('includes/header')
<main>
    <div class="container full-width">
        <div class="content no-margin">
            <div class="row">
                <div class="col s12">
                    <img src="{{ asset('images/nintendo-background.jpg') }}" class="responsive-img" id="welcome-img">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col m8 offset-m2 col s10 offset-s1">
                    <h3 class="center">Bacon Ipsum</h3>
                    <p>Bacon ipsum dolor amet landjaeger flank cow venison prosciutto. Turkey pork chop meatball porchetta ribeye. Salami capicola sausage picanha hamburger kevin ribeye burgdoggen alcatra short loin beef shank kielbasa jowl pig. Ground round buffalo porchetta, jowl landjaeger spare ribs flank chuck alcatra ham hock pig. Buffalo flank pancetta jerky shoulder tri-tip bresaola doner beef kevin shankle shank.</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col m6 col s12 no-padding">
                    <div class="card no-margin">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('images/mariokart.jpg') }}">
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col m6 col s12 no-padding">
                    <div class="card no-margin">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('images/supersmash.jpg') }}">
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col m6 col s12 no-padding">
                    <div class="card no-margin">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('images/marioparty.jpg') }}">
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col m6 col s12 no-padding">
                    <div class="card no-margin">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('images/goldeneye-multiplayer.jpg') }}">
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('includes/footer')
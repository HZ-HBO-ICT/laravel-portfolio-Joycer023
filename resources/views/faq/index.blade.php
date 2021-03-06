@extends('layout')

@section('content')

    <div class="grid-container">
        <div class="grid-item1">
            <div class= "image-container-banner-faq">
                <div class="inner-container-faq">
                    <h1 class="banner-home">FAQ
                    </h1>
                    <h3 class="banner-home-2">All questions about the HZ
                        <br>
                        <br>
                        <br>
                        <br>
                    </h3>
                </div>
            </div>
        </div>


        <div class='whiteBlock'>
            <h1>Here you find all the FAQs</h1>
            @foreach($faq as $faqs)
                <button class="accordion"> {{ $faqs->question }} </button>
                <div class="panel">
                    <p>
                        {{ $faqs->answer }}
                    </p>
                </div>
            @endforeach

        </div>

        <script>
            let acc = document.getElementsByClassName("accordion");
            let i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    let panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }

        </script>
@endsection

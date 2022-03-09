@extends('layout')

@section('content')

<div class="grid-item1">
    <div class= "image-container-banner-dashboard">
        <div class="inner-container-banner">
            <h1 class="banner-home">DASHBOARD
            </h1>
            <h3 class="banner-home-2">See my studyprogress!
                <br>
                <br>
                <br>
                <br>
            </h3>
        </div>
    </div>
</div>
<div class='whiteBlock'>
    <h2>STUDY MONITOR
    </h2>
    <hr>
    <div class="table-dashboard">
        <table class="table-faq-costs">
            <thead>
            <tr>
                <th>Blok
                </th>
                <th>Cursus
                </th>
                <th id="ec">EC
                </th>
                <th>Examen
                </th>
                <th id="cijfer">Cijfer
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td rowspan="3" id="blok">1
                </td>
                <td>Programming and Career Orientation
                </td>
                <td id="ec">2.5 EC
                </td>
                <td>Assessement
                </td>
                <td id="cijfer">8.8
                </td>
            </tr>
            <tr>
                <td>Computer Science Basics
                </td>
                <td id="ec">7.5 EC
                </td>
                <td>Written examn
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td>Programming Basics
                </td>
                <td id="ec">5 EC
                </td>
                <td>Case study examn
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td rowspan="3" id="blok">2
                </td>
                <td rowspan="2">Object Oriented Programming
                </td>
                <td rowspan="2" id="ec">10 EC
                </td>
                <td>Case study
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td>Project
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <td>Professional Skills 1
            </td>
            <td id="ec">2.5 EC
            </td>
            <td>Portfolio examn
            </td>
            <td id="cijfer">-
            </td>
            <tr>
                <td rowspan="5" id="blok">3
                </td>
                <td>Framework Project 1
                </td>
                <td id="ec">5 EC
                </td>
                <td>2 portfolio examns
                </td>
                <td id="cijfer">-
                    <br>-
                </td>
            </tr>
            <tr>
                <td>Framework Development 1
                </td>
                <td id="ec">5 EC
                </td>
                <td>Case Study
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td>Professional Working Environment
                </td>
                <td id="ec">2.5 EC
                </td>
                <td>Assessment
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td rowspan="2">Professional Skills 2
                </td>
                <td rowspan="2" id="ec">2.5 EC
                </td>
                <td> Portfolio Exam
                </td>
                <td id="cijfer">-
                    <br>
                </td>
            </tr>
            <tr>
                <td>2 Written Exams
                </td>
                <td id="cijfer">-
                    <br> -
                </td>
            </tr>
            <tr>
                <td rowspan="4" id="blok">4
                </td>
                <td>Framework Project 2
                </td>
                <td id="ec">5 EC
                </td>
                <td>Portfolio exam
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td>Framework Development 2
                </td>
                <td id="ec">5EC
                </td>
                <td>Portfolio Exam
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td rowspan="2">Professional Skills 3
                </td>
                <td rowspan="2" id="ec">2.5 EC
                </td>
                <td> Portfolio Exam
                </td>
                <td id="cijfer">-
                    <br>
                </td>
            </tr>
            <tr>
                <td>2 Written Exams
                </td>
                <td id="cijfer">-
                    <br> -
                </td>
            </tr>
            <tr>
                <td rowspan="2" id="blok">~
                </td>
                <td>HZ Personality
                </td>
                <td id="ec">2.5 EC
                </td>
                <td>Portfolio
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            <tr>
                <td>HZ Personality
                </td>
                <td id="ec">2.5 EC
                </td>
                <td>Portfolio
                </td>
                <td id="cijfer">-
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class='blockGreen'>
    <div class="nbsa-bar">
        <h2>NBSA GRENS
        </h2>
        <hr>
        <div class="meter">
          <span style="width: 1%">
          </span>
            <p>0%
            </p>
        </div>
    </div>
</div>
<div class='whiteBlock'>
    <h2>STUDY GUIDE
    </h2>
    <hr>
    <div class="cards-dashboard">
        <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/Onderwijs-en-Examenregeling-HZ-2020-2021-bachelor.pdf" id="link-cards" target="_blank">
            <div class="row">
                <div class="column" >
                    <div class="card">
                        <img src="{{ asset('img/checklist.png') }}" alt="checklist" id="cer">
                        <h3>CER
                        </h3>
                    </div>
                </div>
        </a>
        <a href="https://hz.nl/uploads/documents/Regelingen/NL/Uitvoeringsregeling-OER-HBO-ICT-Voltijd-2019-2020.pdf" target="_blank">
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/exam.png') }}" alt="exam image" id="oer">
                    <h3>OER
                    </h3>
                </div>
            </div>
        </a>
        <a href="https://learn.hz.nl" target="_blank">
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/class.png') }}" alt="class image" id="hzlearn">
                    <h3>HZ LEARN
                    </h3>
                </div>
            </div>
        </a>
        <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/presentation.png') }}" alt="presentation" id="studievoortgang">
                    <h3>STUDIEVOORTGANG
                    </h3>
                </div>
            </div>
        </a>
        <a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/teams.png') }}" alt="teams logo" id="teams">
                    <h3>TEAMS EERSTE JAAR
                    </h3>
                </div>
            </div>
        </a>
        <a href="https://github.com/joycer023" target="_blank">
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/github.png') }}" alt="github" id="github">
                    <h3>GITHUB
                    </h3>
                </div>
            </div>
        </a>
    </div>
</div>


@endsection

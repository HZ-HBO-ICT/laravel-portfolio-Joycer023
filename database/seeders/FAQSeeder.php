<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Q: How do you print a document here at the HZ?',
                'answer' => '<li>Go to <a href="http://print.hz.nl/">print.hz.nl</a> and login.</li>
                             <li>Here you can choose which file(s) by clicking on
                              "Choose File" (This step can be repeated to add more documents).</li>
                             <li>By clicking on the "Advanced options" button you can specify
                             whether your document will be printed in color or is double-sided.</li>
',
                'link' => null,
            ],
            [
                'question' => 'Q: How do you scan a document and send it to your laptop here at the HZ?',
                'answer' => '<ol>
                                    <li>Make sure you have a sufficient amount of money on your HZ card.
                                    Although scanning is free, you must have this amount of credit on your HZ pass.</li>
                                    <li>Register using your HZ pass on the RFID reader next to the printer.</li>
                                    <li>In the printer menu, select option Scan.</li>
                                    <li>Place the original sheet on the feeder or glass plate.</li>
                                    <li>Press Scan and Send.</li>
                                    <li>Press Scan to me.</li>
                                    <li>Press Yes.</li>
                                    <li>Press the Start button.</li>
                                    <li>Press the green Start button on the printer to
                                    scan page by page. Once this is ready, press Start Sending.</li>
                                </ol>
                                <p>When scanning is finished you can log out.</p> ',
                'link' => null,
            ],
            [
                'question' => 'Q: What should you do if you are sick or have symptoms of corona virus?',
                'answer' => 'If you are sick or have corona symptoms you absolutely must
                             not come to school and notify your teacher through Teams.
                             Make sure you continue to attend all classes to avoid falling behind. Y',
                'link' => null,
            ],
            [
                'question' => 'Q: How can you book a project space in one of the wings of the building?',
                'answer' => 'You can book a project space by going to
                             <a href="https://portal.hz.nl/">portal.hz.nl</a>
                             and clicking on "Selfservice Portal" in your personal menu.
                             When logged into the Selfservice Portal click on "Make a reservation"
                              and then click on the type of space you want to book.
                              You will then be taken to a schedule where you can see when each room is available.
                              Here you can also book rooms when they are not occupied.',
                'link' => null,
            ],
            [
                'question' => 'Q: What are the instructions for parking your car in the HZ parking lot?',
                'answer' => 'If you have a HZ student pass you can park your car
                             at the following address: Poelendaelesingel, 4335 JA Middelburg.
                             You can enter the parking lot by scanning your HZ student pass at the entrance.',
                'link' => null,
            ],

        ]);
    }
}

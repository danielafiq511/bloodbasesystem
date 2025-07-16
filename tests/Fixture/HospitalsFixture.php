<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HospitalsFixture
 */
class HospitalsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'hospitalID' => 'ae9f9acf-a6bd-4e80-87b9-16180b72f037',
                'hospitalName' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'contactInfo' => 'Lorem ipsu',
            ],
        ];
        parent::init();
    }
}

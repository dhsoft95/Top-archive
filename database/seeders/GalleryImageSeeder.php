<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use App\Models\ImgCategory;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    public function run(): void
    {

        $images = [
            [
                'title'       => 'Barcoding archive boxes at our Dar es Salaam facility',
                'description' => 'Our team applies barcodes and unique identifiers to incoming archive boxes for accurate inventory tracking at our Tanzania operations centre.',
                'image_path'  => 'gallery/placeholder-01.jpg',
                'order'       => 1,
                'is_active'   => true,
                'categories'  => ['Physical Archive', 'Warehouse & Storage'],
            ],
            [
                'title'       => 'High-speed document scanning workstation in Accra',
                'description' => 'Operators at our Accra digitization centre process thousands of pages daily using high-speed flatbed and sheet-feed scanners.',
                'image_path'  => 'gallery/placeholder-02.jpg',
                'order'       => 2,
                'is_active'   => true,
                'categories'  => ['Document Digitization'],
            ],
            [
                'title'       => 'Climate-controlled storage racks at our Lagos warehouse',
                'description' => 'Rows of high-density shelving inside our Lagos climate-controlled vault, maintaining optimal temperature and humidity for long-term preservation.',
                'image_path'  => 'gallery/placeholder-03.jpg',
                'order'       => 3,
                'is_active'   => true,
                'categories'  => ['Warehouse & Storage', 'Physical Archive'],
            ],
            [
                'title'       => 'Industrial shredders at our certified destruction facility',
                'description' => 'Our commercial-grade cross-cut shredders handle confidential document destruction in compliance with data protection regulations.',
                'image_path'  => 'gallery/placeholder-04.jpg',
                'order'       => 4,
                'is_active'   => true,
                'categories'  => ['Document Destruction'],
            ],
            [
                'title'       => 'File retrieval team at work in our Kampala document centre',
                'description' => 'Staff locate and retrieve client files from our Kampala facility, ensuring same-day delivery to requesting clients.',
                'image_path'  => 'gallery/placeholder-05.jpg',
                'order'       => 5,
                'is_active'   => true,
                'categories'  => ['Physical Archive', 'Team & Staff'],
            ],
            [
                'title'       => 'Receiving and indexing incoming archive boxes',
                'description' => 'New consignments from clients are carefully received, weighed, catalogued, and assigned storage locations in our management system.',
                'image_path'  => 'gallery/placeholder-06.jpg',
                'order'       => 6,
                'is_active'   => true,
                'categories'  => ['Physical Archive'],
            ],
            [
                'title'       => 'Quality control inspection of digitized records',
                'description' => 'QC officers review digitized document images for clarity, completeness, and file integrity before delivery to clients.',
                'image_path'  => 'gallery/placeholder-07.jpg',
                'order'       => 7,
                'is_active'   => true,
                'categories'  => ['Document Digitization'],
            ],
            [
                'title'       => 'Secure vault entrance at our Accra storage facility',
                'description' => 'Access-controlled entrance to our fire-rated vault, equipped with biometric scanners and 24-hour CCTV surveillance.',
                'image_path'  => 'gallery/placeholder-08.jpg',
                'order'       => 8,
                'is_active'   => true,
                'categories'  => ['Office Facilities', 'Physical Archive'],
            ],
            [
                'title'       => 'Client onboarding workshop in Lagos',
                'description' => 'Representatives from a leading Nigerian bank attend a records management orientation session at our Lagos headquarters.',
                'image_path'  => 'gallery/placeholder-09.jpg',
                'order'       => 9,
                'is_active'   => true,
                'categories'  => ['Client Events'],
            ],
            [
                'title'       => 'Certificate of destruction handover ceremony',
                'description' => 'A client receives an official certificate confirming the secure destruction of their confidential business records.',
                'image_path'  => 'gallery/placeholder-10.jpg',
                'order'       => 10,
                'is_active'   => true,
                'categories'  => ['Document Destruction', 'Client Events'],
            ],
            [
                'title'       => 'Climate monitoring systems inside our Nairobi-area warehouse',
                'description' => 'Automated temperature and humidity sensors log conditions around the clock to safeguard paper-based records from environmental damage.',
                'image_path'  => 'gallery/placeholder-11.jpg',
                'order'       => 11,
                'is_active'   => true,
                'categories'  => ['Warehouse & Storage'],
            ],
            [
                'title'       => 'High-density mobile shelving installation',
                'description' => 'Mechanical mobile shelving units maximise usable floor space in our storage vaults, accommodating more client records per square metre.',
                'image_path'  => 'gallery/placeholder-12.jpg',
                'order'       => 12,
                'is_active'   => true,
                'categories'  => ['Warehouse & Storage', 'Physical Archive'],
            ],
            [
                'title'       => 'Team of archivists at work in our Tanzania facility',
                'description' => 'Our Tanzania archivists sort and classify a government ministry\'s historical records ahead of long-term preservation.',
                'image_path'  => 'gallery/placeholder-13.jpg',
                'order'       => 13,
                'is_active'   => true,
                'categories'  => ['Team & Staff', 'Physical Archive'],
            ],
            [
                'title'       => 'Document indexing and metadata capture in progress',
                'description' => 'Data entry operators assign metadata — document type, date, client reference — to each scanned file to enable fast digital retrieval.',
                'image_path'  => 'gallery/placeholder-14.jpg',
                'order'       => 14,
                'is_active'   => true,
                'categories'  => ['Document Digitization'],
            ],
            [
                'title'       => 'Secure loading bay at our Kumasi depot',
                'description' => 'Records are transferred between armoured transport vehicles and our loading dock under strict chain-of-custody procedures.',
                'image_path'  => 'gallery/placeholder-15.jpg',
                'order'       => 15,
                'is_active'   => true,
                'categories'  => ['Warehouse & Storage'],
            ],
            [
                'title'       => 'Fire suppression and safety systems overview',
                'description' => 'Our FM-200 gas suppression system protects stored records from fire damage without harming documents or the environment.',
                'image_path'  => 'gallery/placeholder-16.jpg',
                'order'       => 16,
                'is_active'   => true,
                'categories'  => ['Office Facilities', 'Warehouse & Storage'],
            ],
            [
                'title'       => 'Staff training session on records management protocols',
                'description' => 'New recruits undergo structured training on ARMA International standards and Top Archive\'s internal handling procedures.',
                'image_path'  => 'gallery/placeholder-17.jpg',
                'order'       => 17,
                'is_active'   => true,
                'categories'  => ['Team & Staff'],
            ],
            [
                'title'       => 'Fleet of vehicles for secure records transport',
                'description' => 'Our tracked and sealed transport fleet moves client archives between sites, maintaining an unbroken chain of custody at all times.',
                'image_path'  => 'gallery/placeholder-18.jpg',
                'order'       => 18,
                'is_active'   => true,
                'categories'  => ['Warehouse & Storage'],
            ],
            [
                'title'       => 'Executive team at the Ghana office headquarters',
                'description' => 'The Top Archive Ghana leadership team at our Accra headquarters following a regional strategy planning session.',
                'image_path'  => 'gallery/placeholder-19.jpg',
                'order'       => 19,
                'is_active'   => true,
                'categories'  => ['Team & Staff', 'Office Facilities'],
            ],
            [
                'title'       => 'RFID tracking system for real-time archive location',
                'description' => 'Each archive box is fitted with an RFID tag enabling instant, accurate location tracking throughout our storage facilities.',
                'image_path'  => 'gallery/placeholder-20.jpg',
                'order'       => 20,
                'is_active'   => true,
                'categories'  => ['Physical Archive', 'Document Digitization'],
            ],
//            [
//                'title'       => 'Open day at our Kampala document centre',
//                'description' => 'Prospective clients tour our Uganda facility during an annual open-day event, exploring storage capabilities and technology firsthand.',
//                'image_path'  => 'gallery/placeholder-21.jpg',
//                'order'       => 21,
//                'is_active'   => true,
//                'categories'  => ['Client Events', 'Office Facilities'],
//            ],
            [
                'title'       => 'Long-term preservation enclosures for sensitive materials',
                'description' => 'Acid-free archival boxes and polyester enclosures protect fragile historical documents and microfilm from deterioration.',
                'image_path'  => 'gallery/placeholder-22.jpg',
                'order'       => 22,
                'is_active'   => true,
                'categories'  => ['Physical Archive'],
            ],
            [
                'title'       => 'Shredded material being baled for recycling',
                'description' => 'After secure destruction, shredded paper is compacted into bales and sent to certified recycling partners, supporting our zero-waste commitment.',
                'image_path'  => 'gallery/placeholder-23.jpg',
                'order'       => 23,
                'is_active'   => true,
                'categories'  => ['Document Destruction'],
            ],
            [
                'title'       => 'Digital archive dashboard demonstration for a client',
                'description' => 'Our account manager walks a client through the online document retrieval portal, showcasing search, download, and audit-trail features.',
                'image_path'  => 'gallery/placeholder-24.jpg',
                'order'       => 24,
                'is_active'   => true,
                'categories'  => ['Document Digitization', 'Client Events'],
            ],
            [
                'title'       => 'Nigeria team after ISO certification achievement',
                'description' => 'The Lagos operations team celebrates after successfully completing an ISO 9001:2015 quality management system audit.',
                'image_path'  => 'gallery/placeholder-25.jpg',
                'order'       => 25,
                'is_active'   => true,
                'categories'  => ['Team & Staff'],
            ],
            [
                'title'       => 'Scanning room operations at the Dar es Salaam branch',
                'description' => 'Multiple scanning stations operate in parallel to meet tight digitization deadlines for a government contract in Tanzania.',
                'image_path'  => 'gallery/placeholder-26.jpg',
                'order'       => 26,
                'is_active'   => false,
                'categories'  => ['Document Digitization'],
            ],
            [
                'title'       => 'Specialised media vault for digital storage tapes',
                'description' => 'A dedicated media vault maintains precise conditions for LTO magnetic tapes and optical discs holding clients\' digital backup archives.',
                'image_path'  => 'gallery/placeholder-27.jpg',
                'order'       => 27,
                'is_active'   => true,
                'categories'  => ['Warehouse & Storage', 'Physical Archive'],
            ],
            [
                'title'       => 'Annual customer appreciation dinner in Accra',
                'description' => 'Top Archive Ghana hosts key clients at an annual appreciation dinner, celebrating long-standing partnerships in records management.',
                'image_path'  => 'gallery/placeholder-28.jpg',
                'order'       => 28,
                'is_active'   => true,
                'categories'  => ['Client Events'],
            ],
            [
                'title'       => 'On-site document collection at a client premises in Abuja',
                'description' => 'Our field team arrives at a government ministry in Abuja to pack, label, and transport inactive records to our secure facility.',
                'image_path'  => 'gallery/placeholder-29.jpg',
                'order'       => 29,
                'is_active'   => false,
                'categories'  => ['Physical Archive', 'Team & Staff'],
            ],
            [
                'title'       => 'Modern reception and client lounge at our Accra HQ',
                'description' => 'The reception area of Top Archive\'s Ghana headquarters, designed to reflect professionalism and the trust our clients place in us.',
                'image_path'  => 'gallery/placeholder-30.jpg',
                'order'       => 30,
                'is_active'   => true,
                'categories'  => ['Office Facilities'],
            ],
        ];

        foreach ($images as $data) {
            $categoryNames = $data['categories'];
            unset($data['categories']);

            $image = GalleryImage::updateOrCreate(
                ['title' => $data['title']],
                $data
            );

            $categoryIds = ImgCategory::whereIn('name', $categoryNames)
                ->pluck('id')
                ->toArray();

            $image->categories()->sync($categoryIds);
        }
    }
}

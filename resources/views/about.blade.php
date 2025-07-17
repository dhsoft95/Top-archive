@extends('layouts.app')
@section('title', 'Top Archive - About')
@section('content')
{{--    @include('includes.nav')--}}

    <div class="main-container">
        <!-- Story Section -->
        <div class="section">
            <span class="section-badge">Our History</span>
            <p class="section-text section-text-normal" style="font-size: 22px">
                Top Archive is a leading provider in Africa's document storage, record management, and archiving industry. With 25 years of experience and a dedicated, skilled team, we serve major clients in Ghana, Nigeria, Tanzania, and Uganda. Trust us for comprehensive and superior solutions in archive storage and information management
            </p>
        </div>
        <!-- Warehouse Image Section -->
        <div class="warehouse-section">
            <img src="{{ asset('assets/images/man-works-warehouse.png') }}" alt="Warehouse Storage" class="warehouse-image">
            <div class="warehouse-overlay"></div>
            <div class="play-button-wrapper" data-bs-toggle="modal" data-bs-target="#videoModal">
                <div class="play-button">
                    <div class="play-button-icon"></div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe id="youtubeVideo" src="" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History Section -->
        <div class="section section-bg">
            <span class="section-badge">Who we are</span>
            <p class="section-text section-text-normal">
                Our principle is to empower Businesses in the Digital Age with World-Class Record Storage and Information Management Solutions. Our high-standard, world-class facilities ensure streamlined storage and management of records, enabling quick access to vital business documents and information. Gain a competitive edge and enhance productivity with our comprehensive solutions for small, medium, and large-scale businesses.
            </p>
        </div>
        <!-- Who we are Section -->
        <div class="section">
            <span class="section-badge">What we do</span>
            <p class="section-text section-text-normal">
                Optimise your office space and streamline document management. Our skilled team organises, catalogues, stores, and digitises documents using advanced electronic document management systems (EDMS)  and records management systems (ERMS). Access and retrieve records easily on your computer, supporting your daily business needs. Don't wait; take control of your documents today.
            </p>
        </div>

        <!-- Our Clients Section -->
        <div class="section">
            <span class="section-badge">Our Clients</span>
            <p class="section-text section-text-light">
                Top Archive’s client list includes multinational companies spanning a range of industries, including banking, insurance, oil & gas, telecom, shipping, and major government institutions. Our company has gained invaluable technical and legal expertise in managing records/information from every kind of industry, alongside our ability to respond accurately with solutions customised to the client’s needs.
            </p>
        </div>
    </div>
    @include('includes.cta')
{{--    @include('includes.footer')--}}
@endsection

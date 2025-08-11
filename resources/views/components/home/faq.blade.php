<div class="w-full px-4 py-12">
    <div class="text-center mt-6 flex flex-col items-center mb-12">
        <h1 class="text-4xl font-bold uppercase mb-4">Do you have a question?</h1>
        <div class="w-16 h-1 bg-yellow-400 mb-4"></div>
        <p class="text-lg text-gray-600">We are here to help!</p>
    </div>

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Left side - FAQ Image -->
            <div class="flex justify-center lg:justify-start">
                <div class="bg-yellow-50 rounded-2xl p-8 w-full max-w-md">
                    <div class="text-center">
                        <!-- FAQ Illustration -->
                        <div class="w-48 h-48 mx-auto mb-6 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-24 h-24 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h3>
                        <p class="text-gray-600 mb-6">Find quick answers to common questions about our document archiving services.</p>
                        <div class="flex justify-center space-x-4">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Quick Answers</span>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Fast Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side - FAQ Accordion -->
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q1')">
                        <div class="flex justify-between items-center">
                            <span>What is document archiving, and why is it important?</span>
                            <svg id="q1-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q1" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Document archiving involves storing and organizing records securely to ensure they are accessible when needed. It helps protect sensitive information, comply with legal regulations, and improve operational efficiency.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q2')">
                        <div class="flex justify-between items-center">
                            <span>What types of documents can you archive?</span>
                            <svg id="q2-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q2" class="hidden px-6 pb-4">
                        <p class="text-gray-600">We can archive a wide range of documents, including financial records, legal contracts, medical files, employee records, business correspondence, historical archives, and more.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q3')">
                        <div class="flex justify-between items-center">
                            <span>How secure is your document storage?</span>
                            <svg id="q3-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q3" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Our facilities are equipped with state-of-the-art security systems, including 24/7 surveillance, biometric access controls, intrusion alarms, and fire suppression systems, ensuring maximum protection for your records.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q4')">
                        <div class="flex justify-between items-center">
                            <span>Do you provide digital archiving services?</span>
                            <svg id="q4-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q4" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Yes, we specialize in converting paper documents into digital formats using advanced scanning and barcoding technology. This ensures your records are easily accessible and securely stored in a digital environment.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q5')">
                        <div class="flex justify-between items-center">
                            <span>What are the benefits of offsite storage?</span>
                            <svg id="q5-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q5" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Offsite storage frees up office space, ensures compliance with security standards, protects documents from on-site disasters, and provides quick access to records when needed.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q6')">
                        <div class="flex justify-between items-center">
                            <span>Can we access our records remotely?</span>
                            <svg id="q6-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q6" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Yes, our digital archiving solutions allow you to access your records securely from anywhere, at any time, through our user-friendly data management system.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="border border-yellow-200 rounded-lg bg-white shadow-sm">
                    <button class="w-full px-6 py-4 text-left hover:bg-yellow-50 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 font-medium text-gray-800" onclick="toggleAccordion('q7')">
                        <div class="flex justify-between items-center">
                            <span>How do I get started with your services?</span>
                            <svg id="q7-icon" class="w-5 h-5 transform transition-transform duration-200 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="q7" class="hidden px-6 pb-4">
                        <p class="text-gray-600">Getting started is easy! Simply contact us, and our team will guide you through the process, from assessing your needs to implementing the best solutions for your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 mt-12 max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Ready to launch your customized archiving service?</h3>
                <p class="text-gray-600">Send us a request for a free assessment.</p>
            </div>
            <div class="md:ml-6">
                <a href="/contact" class="bg-yellow-400 hover:bg-yellow-500 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">Get started!</a>
            </div>
        </div>
    </div>
</div>


<script>
    function toggleAccordion(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    }
</script>
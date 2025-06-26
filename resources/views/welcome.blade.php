<x-layout>
    {{-- Hero section --}}
    <div class="flex flex-col items-center justify-center h-screen text-accent text-center bg-gray-100">
        <h1 class="text-5xl font-montserrat font-bold text-shadow-md text-primary">Build Better Websites for Your Business.</h1>
        <p class="mt-4 mx-1 text-lg font-open-sans">Hi. I'm a freelance web developer based in The Bahamas. I specialize in building fast, secure, and custom web applications using PHP and Laravel. Whether you need a new website or a custom booking system, I can help bring your ideas to life. </p>
        <button class="mt-6 px-8 py-4 bg-primary text-white text-lg font-semibold rounded hover:bg-secondary transition duration-300">
            <a href="#contact">Contact Us</a>
        </button>    
    </div>
    
    {{-- About Section --}}
    <section class="max-w-4xl mx-auto px-4 py-12 bg-white shadow-lg rounded-lg mt-12" id="about">
        <h2 class="text-3xl font-montserrat font-bold text-center text-primary mt-12">About Us</h2>
        <p class="max-w-2xl mx-auto mt-4 text-lg font-open-sans text-center text-accent">
            I'm a Bahamian web developer with a strong background in PHP and Laravel. I've been working with web technologies for 6+ years, helping small businesses and entrepreneurs bring their ideas online. I understand how important it is for local businesses to have reliable, easy-to-use tools -- and that's exactly what I build.
        </p>
    </section>

    {{-- Services Section --}}
    <section class="max-w-4xl mx-auto px-4 py-12 bg-white shadow-lg rounded-lg mt-12" id="services">
        <h2 class="text-3xl font-montserrat font-bold text-center text-primary mt-12">Our Services</h2>
        <ul class="mt-6 space-y-4">
            <li class="text-lg font-open-sans text-accent">Custom Web Application Development</li>
            <li class="text-lg font-open-sans text-accent">E-commerce Solutions</li>
            <li class="text-lg font-open-sans text-accent">API Development and Integration</li>
            <li class="text-lg font-open-sans text-accent">Cloud Solutions and Hosting</li>
        </ul>
    </section>

    {{-- Contact Section --}}
    <section class="max-w-4xl mx-auto px-4 py-12 bg-white shadow-lg rounded-lg mt-12" id="contact">
        <h2 class="text-3xl font-montserrat font-bold text-center text-primary mt-12">Contact Us</h2>
        <p class="max-w-2xl mx-auto mt-4 text-lg font-open-sans text-center text-accent">
            Have a project in mind? Let's discuss how we can help you achieve your goals. 
            <br>
            <a href="mailto:ek3solutions@gmail.com" class="text-primary hover:underline">
            <span class="flex items-center justify-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
  <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
</svg>

                ek3solutions@gmail.com</span>    
            </a>
            &nbsp;Call us at:
            <a href="tel:+12425565952" class="text-primary hover:underline">
            +1(242) 556-5952
            </a>
        </p>
        <div class="flex justify-center">
            <a href="https://wa.me/12425565952?text=Hello%20EK3%20Solutions!%20I%20would%20like%20to%20inquire%20about%20your%20services." target="_blank" class="flex items-center bg-white rounded-full shadow-lg p-2 m-4 hover:bg-accent/5 transition duration-300">
            <img src="{{ Vite::asset('resources/images/WhatsappWhite.svg') }}">
            </a>
        </div>
        </section>
</x-layout>
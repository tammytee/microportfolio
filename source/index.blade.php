@extends('_layouts.master')

@section('body')
<div class=" bg-gray-100 min-h-screen h-auto pt-12 pb-8 text-sm md:text-base">
  <div class="container relative pb-16 lg:max-w-screen-lg">
    <div>
      <img class="w-56 rounded-full mb-10 ani" src="/assets/images/headshot.jpg" alt="Tammy Robinson">
      <div class="ani">
        <h1 class="text-4xl font-bold leading-none text-indigo-800">Hi, I'm Tammy!</h1>
        <h3 class="text-xl font-semibold text-indigo-800 max-w-3xl mt-2">TL;DR I'm dedicated to finding new ways to contribute to my personal growth; both as a developer and human. #MKEHome.</h3>
      </div>
    </div>

    <div class="leading-8">
      <p class="mt-8 mb-8 ani">I am a <span class="text-indigo-800 font-semibold">web developer</span> based in <span class="text-indigo-800 font-semibold">Charlotte, NC</span> but Milwaukee, WI is home 💜. The youngest and only girl of four siblings, I grew up heavily influenced by my older brother’s tinkering with computers – while another left napkin-like sketches on any blank canvas he could find. A focused trade of Art & Design during high school began to shape my passion for design and systems, and that continued throughout my years of study at the university in my hometown. In an attempt to dip my toes in the water of being away from home (a short time after finishing undergrad), I moved an hour and a half south to Chicago where I received my <span class="text-indigo-800 font-semibold">Masters in Information Technology and Management</span> from Illinois Institute of Technology.</p>

      <p class="mt-8 mb-8 ani">I currently work as an <span class="text-indigo-800 font-semibold">Apprentice Programmer</span> at <a href="https://tighten.co/" target="_blank" rel="external noreferrer noopener">Tighten</a> on a team that develops websites, software, and mobile apps for world-class organizations (Previously, crafting brand experiences as <span class="text-indigo-800 font-semibold">Sr Frontend Developer at</span> <a href="https://atypiccraft.com/" target="_blank" rel="external noreferrer noopener">Atypic</a>). I am also a lead organizer for <a href="https://charlottedevs.com/" target="_blank" rel="external noreferrer noopener">Charlotte Devs</a> and <a href="https://www.meetup.com/QC-Bytes/" target="_blank" rel="external noreferrer noopener">Queen City Bytes</a> meetup groups here in Charlotte. Having a tight connection to the community allows me to be a resource to other underrepresented technologists in the earlier years of their journey, as well as foster digital inclusion by providing resources to Charlotte-area communities who may lack direct access. <span class="text-indigo-800 font-semibold">I am an advocate for all things black in/and STEM.</span></p>

      <p class="mt-8 mb-8 ani">In my downtime, I enjoy traveling, reading, indulging in a good true crime documentary, taking the occasional hike at Crowders ⛰, and rooting for the Milwaukee Bucks and Green Bay Packers from my couch.</p>

      <p class="mt-8 mb-8 ani">Want to connect? <a href="mailto:tammyprodev@gmail.com">Drop me a line</a> or you can find me on <a href="https://www.instagram.com/tammyprodev/" target="_blank" rel="external noreferrer noopener">Instagram</a>, <a href="https://twitter.com/nadrarvre" target="_blank" rel="external noreferrer noopener">Twitter</a> or my <a href="https://www.linkedin.com/in/tammyprodev/" target="_blank" rel="external noreferrer noopener">LinkedIn</a>. Also, check out my resume <a href="/assets/docs/RobinsonT_Resume[PUBLIC].pdf" target="_blank">here</a>.</p>
    </div>

    <p class="footer text-center border-solid border-t-2 border-gray-200 text-gray-500 text-xs p-8 pb-0 absolute bottom-0 left-0 right-0">Tammy Robinson &copy; {{date('Y')}}. Developed using <a class="underline" href="https://jigsaw.tighten.co/" target="_blank" rel="noopener noreferrer">Jigsaw</a> by Tighten and <a class="underline" href="https://tailwindcss.com" target="_blank" rel="noopener noreferrer">TailwindCSS</a></p>
  </div>
</div>
@endsection

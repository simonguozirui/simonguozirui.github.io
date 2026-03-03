---
title: award
subtitle: 
description: 
featured_image: 
---

<style>
  .publication {
    margin-bottom: 10px; /* Reduced spacing */
  }
  .paper-title {
    margin-bottom: -15px; /* Reduced spacing */
  }
  .authors {
    margin-bottom: -15px; /* Reduced spacing */
  }
  .conference {
    font-style: italic;  
    margin-bottom: 3px; /* Reduced spacing */
  }
  .extra-links a {
  }
  .extra-links a:hover {
    text-decoration: underline;
  }
</style>




<h2>Publications</h2>
<p>* indicates Equal Contribution</p>
<br />


{% for paper in site.research reversed%}
<div class="publication">
  <h6 class="paper-title">
    <a href="{{ paper.paper_url  | relative_url }}">{{paper.title}}</a>
  </h6>
  <p class="authors">
    {{ paper.author }}

    {% if paper.author_notation %}
      <br />
      <span class="author-notation">{{ paper.author_notation }}</span>
    {% endif %}
  </p>
  <p class="conference">
    {{paper.conference_short}}
  </p>
</div>
{% endfor %}




<h2>Talks</h2> 
<ul>
 <li> How to Build Agents to Generate Kernels for Faster LLMs (and Other Models!); <a href="https://neurips.cc/virtual/2025/loc/mexico-city/128792">Tutorial</a> @ NeurIPS 2025</li>
 <li> KernelBench; Best Paper Talk at <a href="https://iclr.cc/virtual/2025/workshop/23976#wse-detail-10000567"> DL4C: Deep Learning For Code </a> @ ICLR 2025. </li>
 <li> Project Popcorn; Talk at <a href="https://youtu.be/mdDVkBeFy9A?feature=shared&t=2160"> GPU MODE </a> @ NVIDIA GTC 2025. </li>
 <li> GPU kernel generation; Talk at <a href="https://neurips.cc/virtual/2024/108288">HAC: The Hacker-Cup AI Competition</a> @ NeurIPS 2024.</li>
 <li> Gemmini: Enabling Systematic Deep-Learning Architecture Evaluation via Full-Stack
Integration. Tutorial at <a href="https://sites.google.com/berkeley.edu/gemmini-tutorial-mlsys-2022/##h.moh3t9dwtezk"><i>MLSys 2022</i></a> and <a href="https://sites.google.com/berkeley.edu/gemminitutorialiiswc2021/"><i>IISWC 2021</i></a>. </li>
</ul>

<h2>Awards</h2>
  <ul>
    <li>UC Berkeley EECS Arthur M. Hopkin Award (2021-2022) - <i>outstanding Electrical Engineering undergraduate</i></li>
    <li>Apple-UC Berkeley New Silicon Initiative Class Award (2022) - <i>for CS 152 Computer Architecture and Engineering </i></li>
    <li>Apple-UC Berkeley New Silicon Initiative Class Design Contest Award (2021) - <i>for CPU design project in EECS 151 Digital Design & Integrated Circuit</i></li>
    <li>Tau Beta Pi (TBP) National Engineering Honor Society - <i>CA-A Chapter</i></li>
    <li>IEEE-Eta Kappa Nu (HKN) National Electrical Engineering Honor Society - <i>Mu Chapter Officer</i></li>
    <li>UC Berkeley Regents’ and Chancellor’s Scholarship (2019)</li>
    <li>Consumer Electronics Show (2019) Innovation Award in Fitness, Sports, and Biotech - <i>with the Interaxon Team for our work on Muse 2</i></li>
    <li>Second Place Overall at Product Hunt Global Hackathon 2017 - <i>out of 8000+ submissions for our work on Sweetbud</i></li>
    <li>Winner at Hack the North 2017 - <i>out of 250+ teams at Canada's largest hackathon</i></li>
    <li>Second Place at SXSW Student Startup Madness 2018 - <i>out of 64 college startups</i></li>
    <li>Third Place Overall at TechCrunch Shenzhen Hackathon 2017</li>
  </ul>

<h2>Special thanks to </h2>

Deeply grateful to the following individuals for their kindness, mentorship, and guidance throughout my journey. 

<ul>
  <li><a href="https://people.eecs.berkeley.edu/~ysshao/">Prof. Sophia Shao</a> </li>
  <li><a href="http://people.eecs.berkeley.edu/~istoica/">Prof. Ion Stoica</a> </li>
  <li><a href="http://people.eecs.berkeley.edu/~demmel/">Prof. James Demmel</a> </li>
  <li><a href="https://german.berkeley.edu/people/karen-feldman/">Prof. Karen Feldman</a> </li>
  <li><a href="https://www.linkedin.com/in/daniellestrachman/">Danielle Strachman</a> </li>
  <li><a href="https://www.linkedin.com/in/lakabuli/">Leyla Kabuli  </a> </li>
  <li><a href="https://www.linkedin.com/in/rohan-pai-a95b2b53/">Rohan Pai  </a> </li>
  <li><a href="https://arorasimran.com/">Simran Arora </a></li>
</ul>

<h2> Mentoring </h2>
I am lucky to have worked with amazing master and undergrad students on various projects: <a href="https://www.linkedin.com/in/williamh20/">William Hu</a>, <a href="https://www.linkedin.com/in/caia-costello-5b4064216/">Caia Costello</a>, <a href="https://www.linkedin.com/in/carlo-baronio/">Carlo Baronio</a>, <a href="https://www.linkedin.com/in/pietro-max-marsella/">Pietro Marsella</a>, <a href="https://www.linkedin.com/in/ybenpan/">Ben Pan</a>, <a href="https://www.linkedin.com/in/nathan-js-paek/">Nathan Paek</a>.

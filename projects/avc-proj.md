title: Autonomous Vehicle Competition(AVC)
subtitle: Personal, DIY autopilot
thumbnail: img/projects/avc.jpg
categories: personal
date: 1/6/13
---
<link rel="stylesheet" type="text/css"  href="css/grid.css">

# AVC Autonomous Vehicle Competition
**Project Date:** 6/13 - *Senior in High School*

---

![avc](img/projects/avc.jpg)

## TL;DR
During the summer of 2013 and 2014 I participated in the Sparkfun Autonomous Vehicle Competition(AVC). The goal of the aerial competition is to complete a circuit using a UAV/drone. Points were awarded based on completion time. Bonus points were awarded for dropping a tennis ball on an island, passing under a 30 meter wicket, taking off and landing autonomously, and popping 1 meter balloons out of the air.

The first year I competed with a completely custom made fixed wing autopilot. The second year I used an off the shelf quadrotor autopilot and added computer vision capabilities.

---

## 2013 Competition: Grounded

I entered a fixed wing aircraft the first year I competed. I attempted to design, manufacture, and program my own autopilot(most people bought an off the shelf autopilot). I tested my autopilot using hardware in the loop(HIL) simulation. It worked pretty well but was rough around the edges. When I moved to aerial testing the flight stabilization failed. The problem was that I bought a prebuilt IMU. It worked on the bench but failed in flight. At the time I wasn’t able to figure out what caused the issue but looking back on it, it was most likely centripetal forces or vibration.

My vehicle never took off at the competition but it was a great learning experience and fun to be surrounded by people who shared a similar interest in drones.

#### 2013 gallery

<div class="container">
  <div class="col-md-6">
    <div class="row">
      <div class="gal">
        <img  src="img/projects/avc-1.jpg"></img>
        <img  src="img/projects/avc-2.jpg"></img>
        <img  src="img/projects/avc-3.jpg"></img>
	    </div>
    </div>
  </div>
</div>

---

## 2014 Competition: Balloon hunter

The second year I entered the competition with a multirotor. I avoided buying a plug and play autopilot in 2013 because it was too easy. However, in 2014 Sparkfun introduced the 1 meter balloons. The plug and play autopilot could only navigate using GPS. In order to pop the balloons computer vision was required. So I installed a functional GPS autopilot and then implemented my own higher level computer vision navigation.

I was one of three people who attempted to pop the balloons in a competition of 50 people. No one was able to pop the balloons that year due to the short development cycle(3 months). I was never able to refine my computer vision balloon hunting drone because the aerial competition got cancel the following year due to safety concerns. However, I went on to implement computer vision in future projects outside of the competition.

#### 2014 Competition Recap

*My vehicle is featured at* **6:32** *and sadly* **7:15**

<iframe width="716" height="430" src="https://www.youtube.com/embed/pfJHgSNx_vY" frameborder="0" allowfullscreen></iframe>

title: Quadrotor Visual Precision Land
subtitle: Consulting, Visual navigation
thumbnail: img/projects/precland-quad.jpg
categories: professional
date: 1/7/14
---
# Quadrotor Visual Precision Land
**Project Date:** 7/14 - *Sophomore in College*

---

<iframe width="560" height="315" src="https://www.youtube.com/embed/PeUOq_Y305U" frameborder="0" allowfullscreen></iframe>

---

** See my most recent effort on this project [here](6-3dr-proj.html) **

---

For 6 months I worked on vision assisted landing for ArduCopter. The hope was to provide a means of landing a multirotor in a precise matter which is currently not attainable with GPS based landing supported by ArduCopter.

The development of this software was stimulated by Japan’s recent effort to increase the use of UAV’s for Search and Rescue. More can be read about that [here](http://diydrones.com/profiles/blogs/steps-towards-s-r-in-japan)! This sub-project of the S&R is being funded by Japan Drones, a 3DR retailer, and Enroute, also a 3DR retailer and a member of the [DroneCode Foundation](https://www.dronecode.org/about/).

This specific feature, precision land, is a very small part of the large project and is designed for Multitrotor recovery. The idea is to fly a Multirotor to a disaster zone, survey the land, and relay intel(such as pictures) back to a base station. The base station may be a couple of miles away from the disaster location so precious flight time, and ultimately battery, is used to fly the copter to and from the disaster location. Multirotors are not known for their lengthy flight times, so the more battery that can be conserved for surveying and not traveling is critical for a successful mission.

That’s where the precision land comes in. The idea is to station rovers, or unmanned ground vehicles, near the disaster location. These rovers will have a landing pad on top for a Multirotor. That way a Multirotor can use all of its battery to survey an area, land on top of a rover, and hitch a ride back to the base station on the rover.



## The Specifics:
__Autopilot:__ Pixhawk with ArduCopter 3.2

__Companion Computer:__ Odroid U3

__Camera:__ Logitech c920

__Vision algorithm:__ OpenCV canny edge detection, OpenCV ellipse Detector, my concentric circle algorithm(real simple)

__Performance(on four cores):__ Process images at 30+ fps in good light and 10 fps in low light. Performance is limited by camera exposure not the Odroid’s processing power.



## Previous development

<iframe width="716" height="430" src="https://www.youtube.com/embed/MivdgySE9u4" frameborder="0" allowfullscreen></iframe>

TURN UP THE VOLUME!!! THE AUDIO IS QUIET!!!!

## The code:
The code can be found on my [github](https://github.com/djnugent/precland).

## Update:
Made into the keynote speech at the Embedded Linux Conference!

<iframe width="716" height="430" src="https://www.youtube.com/embed/mFyeFDzbJR4" frameborder="0" allowfullscreen></iframe>

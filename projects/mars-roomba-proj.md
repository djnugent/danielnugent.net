title: Mars Rover Roomba
subtitle: School, Mars rover with a Roomba
thumbnail: img/projects/roomba.jpg
categories: school
date: 1/3/15
---
# Mars Rover Roomba
**Project Date:** 3/15 - *Sophomore in College*

---


![roomba](img/projects/roomba.jpg)

## TL;DR
The spring semester of my sophomore year I took Computer Engineering 288. This was an embedded systems class, and the final project was to program a microcontroller to navigate a Roomba as if it were on Mars.

The Roomba was fitted with a few extra sensors and a bluetooth module. On the front of the robot was an ultrasonic range finder and IR range finder which rested atop a servo. This allowed the robot to scan its environment. We also had access to the Roomba’s built-in wheel drop, wall, and cliff sensors. I lead a team of 4 that finished first.

![gui](img/projects/roomba-gui.png)

The goal of the project was to navigate a simulated Mars environment which was clustered with PVC pillars, PVC caps, missing floor panels, tape boundary, and a landing zone. The landing zone was represented as 4 thin pillars in a square formation.   The robot was placed in a random part of a course, and we had to navigate the course from a secluded computer (meaning no visual contact with the robot). I created a GUI to visualize the data coming in from the rover. This allowed us to monitor the robot’s status and map the environment efficiently. Obstacles are represented by colored circles. Different colors are different obstacles. The robot is the white/black circle. The pink line is a projected location. The green trail is the robot’s previous location. Commands can be sent to the Roomba using the lower panel and in the case of a communication glitch, the status and other info can be requested and displayed in the upper panel.

I lead the group of 4 people. We completed the challenge on our first attempt, and we were the first to finish in our class.

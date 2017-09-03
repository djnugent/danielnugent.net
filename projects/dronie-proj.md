title: Dronie
subtitle: Hackathon, Selfie Drone
thumbnail: img/projects/dronie-front.jpg
categories: personal
---

# Dronie

![dronie](img/projects/dronie-front.jpg)

## TL;DR
Dronie was a 2.5 day ISU hackathon project I did with my roommate Fall 2016. The idea was that you could order an aerial selfie and have a physical picture in your hand in less than 5 min. We made a web app that connected to the drone over 4G. The drone(3DR Solo) carried a camera, raspberry pi, and bluetooth polaroid printer. Once you ordered, the drone would takeoff, fly to you, take your picture, print it, and fly home. We won the best mobile hack and honorable mention!

![drone](img/projects/dronie-print.jpg)


## The Drone

![drone](img/projects/dronie-iso.jpg)

The drone was a 3DR Solo drone running Arducopter and mavlink. It communicated through a raspberry pi over Serial. The Raspberry pi was connected to an onboard cellphone acting as a USB/4G tether. The Raspberry pi also had a camera attached and bluetooth connection with the polaroid printer. Overall, it was a lot of different pieces of hardware working together.

## The App

![app](img/projects/dronie-map.png)

We decided to make a web app that ran on an AWS server. It was faster than making a phone app. Once you selected your location it would generate a flight path for the drone and upload it to the autopilot. Originally we commanded the drone's flight path in real-time, but we struggled with some connectivity issues.

## Issues
Our communication network was pretty complex so it took a while to get all the kinks sorted out. We had 2 way communication connected like this:

**Browser <-> AWS <-> 4G tether <-> Raspberry pi <-> MAVProxy <-> Autopilot**

The biggest issue was managing connection drops and make sure everything was running the right protocol version.

Additionally, we had trouble with the bluetooth printer. The printer is super old and uses a proprietary phone app. So in order to get it to connect to the pi took A LOT of trial and error. In the end we had to use an undocumented command line flag. It almost ruined our project.

Finally, at 4 am on the final day our raspberry pi shorted out due to lack of sleep and delusion. We had to run home, strip one out of an existing project, and try to remember what we put on the other one.

Despite all our set backs we made it! I only got like 4 hours of sleep and was dead the next day, but it was totally worth it.

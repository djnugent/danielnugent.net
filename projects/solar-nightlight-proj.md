title: Solar Nightlight
subtitle: Personal, Decorative Gift
thumbnail: img/projects/solar-1.jpg
categories: personal
---
<link rel="stylesheet" type="text/css"  href="css/grid.css">

# Solar Night Light

![Light at night](img/projects/solar-22.jpg)

## TL;DR
I made a solar night for my girlfriend's Christmas present. She's an advocate for green energy and her first band(The Roomies) just parted ways so I decided to make her a night light that encompassed both of these. For this project I created a 3D printed enclosure covered in veneer and custom solar circuit based on a attiny85.

## Circuit

![Circuit](img/projects/solar-1.jpg)

The first step was to test, design, and prototype the circuit to make sure my idea was possible. I wanted it to be solar power(obviously) but also rechargeable by usb if there wasn't enough sun.  I choose a 6v 70mA solar panel and 3 AA 2500mAh rechargable batteries to power the system. The system draws 20mA when lit and < 10mA when idle. So it could roughly last 10 days on a single charge with no sun. I used an attiny85(adafruit 3v trinket) to read solar levels and control the led panel brightness with pwm. The led panel was composed of 8 12mmx40mm led backlights that were masked by a sticker from carstickers.com. I was pretty proud of the circuit because it is simple but is actually does a lot. It allows for solar or usb charging and uses the solar panel as a light sensor. I designed it myself and it works great!

## Enclosure

![Enclosure](img/projects/solar-30.png)

I CADed the enclosure up in sketchup(because I haven't taken the time to learn a parametric CAD suite yet). It is composed of 3 parts and was printed on my printrbot simple using Simplify3D.  I had to print it twice because the first version was about a 1mm to small in every dimension; Damn tolerancing. There was access for the usb port. That back has access for battery replacement(if it's ever needed). The front is open for led panel to shine through the veneer.

## Veneer

The veneer was the key to making this project look nice. I really wanted to make the night light out of wood, not plastic, but I don't have a woodshop in my apartment so that was out of the question. The veneer also allowed for the signature look of the text shining through the wood. It gives a nice warm glow at night and looks like a simple box in the window during the day.

## Replicate

All the design files, code, and photos can be found on my [github](https://github.com/djnugent/solarnightlight)

## More photos

<div class="container">
  <div class="col-md-6">
    <div class="row">
      <div class="gal">
        <img  src="img/projects/solar-2.jpg"></img>
        <img  src="img/projects/solar-3.jpg"></img>
        <img  src="img/projects/solar-4.jpg"></img>
        <img  src="img/projects/solar-5.jpg"></img>
        <img  src="img/projects/solar-6.jpg"></img>
        <img  src="img/projects/solar-7.jpg"></img>
        <img  src="img/projects/solar-8.jpg"></img>
        <img  src="img/projects/solar-9.jpg"></img>
        <img  src="img/projects/solar-10.jpg"></img>
        <img  src="img/projects/solar-11.jpg"></img>
        <img  src="img/projects/solar-12.jpg"></img>
        <img  src="img/projects/solar-13.jpg"></img>
        <img  src="img/projects/solar-14.jpg"></img>
        <img  src="img/projects/solar-15.jpg"></img>
        <img  src="img/projects/solar-16.jpg"></img>
        <img  src="img/projects/solar-17.jpg"></img>
        <img  src="img/projects/solar-18.jpg"></img>
        <img  src="img/projects/solar-19.jpg"></img>
        <img  src="img/projects/solar-21.jpg"></img>
        <img  src="img/projects/solar-23.jpg"></img>
        <img  src="img/projects/solar-24.jpg"></img>
        <img  src="img/projects/solar-25.jpg"></img>
        <img  src="img/projects/solar-26.jpg"></img>
        <img  src="img/projects/solar-27.jpg"></img>
        <img  src="img/projects/solar-29.png"></img>
	    </div>
    </div>
  </div>
</div>

import './bootstrap';

import "toastify-js/src/toastify.css";
import Toastify from 'toastify-js';

import { gsap } from "gsap";

import { Flip } from "gsap/Flip";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(Flip,ScrollTrigger,ScrollToPlugin);

window.Toastify = Toastify;



gsap.from('.heroGlove', {
    opacity:0,
    scale:.5,
    duration: 1,
    delay:.5
})

gsap.utils.toArray('.title').forEach(title=>{
    gsap.fromTo(title,{
        opacity:0,
        x:-300,
        skewX:65
    },{
        opacity:1,
        x:0,
        skewX:0,
        delay:.5,
        duration:1,
        scrollTrigger:title
    })
})

gsap.utils.toArray('button').forEach(button=>{
    gsap.fromTo(button,{
        opacity:0,
    },{
        opacity:1,
        duration:1,
        delay:1,
        scrollTrigger:button
    })
})

gsap.fromTo('.card' ,{
    opacity:0,
    scale:.1,
},{
    opacity:1,
    scale:1,
    duration:1,
    delay:.5,
    stagger:{
        amount:1
    },
    scrollTrigger:'.card'
})

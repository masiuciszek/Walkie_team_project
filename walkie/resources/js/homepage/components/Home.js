import React, { Component } from 'react'
import Navbar from './Navbar';
import Hero from './Hero';
import Model1 from './Model1';
import Model2 from './Model2';
import {Button, Col, Container, Row } from 'reactstrap';
import { Spring } from 'react-spring/renderprops'



import './home.css'

export default class Home extends Component {
  render() {
    return (
      <React.Fragment>
      <Navbar
          title='Walkie'
          btn1="Login"
          btn2="Register"
            module={
            <Model1
            buttonLabel="login"
            login="login"
            cancel="cancel"
            />
            }
            module2={
              <Model2
              buttonLabel="register"
              register="register"
              cancel="cancel"
              />
            }
        />

      <Spring
        from={{ opacity:0 }}
        to={{ opacity:1 }}
        config={{duration:2000}}
        >
        {props => (
          <div style={props}>
            <Container>
              <Hero
                hero='Walkie'
                text='Ever thought about getting a dog? Seems like you are in a right place! Why shop when you can rescue? All of our pups are ready to settle down with new, loving families! As soon as they arrive to our shelter we start to train them so you won’t have to! Maybe you love dogs but for some reasons can’t own one? No problem! Our shelter gives you the possibility to take a pup for a walk, it’s as easy as pie! All you have to do is reserve one and enjoy the company of one of our dogs.'
              />

            </Container>
            </div>
          )}
      </Spring>

      </React.Fragment>
    )
  }
}

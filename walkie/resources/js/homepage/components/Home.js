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
                text='Doggo ipsum woof woof Doggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woof'
              />

            </Container>
            </div>
          )}
      </Spring>

      </React.Fragment>
    )
  }
}

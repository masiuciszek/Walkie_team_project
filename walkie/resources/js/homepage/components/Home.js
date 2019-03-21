import React, { Component } from 'react'
import Navbar from './Navbar';
import Hero from './Hero';
import Module from './Module';
import {Button, Col, Container, Row } from 'reactstrap';
import './home.css'

export default class Home extends Component {
  render() {
    return (
      <React.Fragment>
      <Navbar
          title='Walkie'
          btn1="Login"
          btn2="Register"
        />
      <Container>
        <Hero
          hero='Walkie'
          text='Doggo ipsum woof woof Doggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woof'
            module={<Module
            buttonLabel="login/register"
            login="login"
            register="register"
            cancel="cancel"
            />}
        />

      </Container>
      </React.Fragment>
    )
  }
}

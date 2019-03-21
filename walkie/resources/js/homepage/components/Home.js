import React, { Component } from 'react'
import Navbar from './Navbar';
import Hero from './Hero';

export default class Home extends Component {
  render() {
    return (
      <div>
        <Navbar
          title='Walkie'
          btn1="Login"
          btn2="Log out"
        />
        <Hero
          hero='Walkie'
          text='Doggo ipsum woof woof Doggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woofDoggo ipsum woof woof'
        />
      </div>
    )
  }
}

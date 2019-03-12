import React from 'react';
import Navbar from './Navbar';

class Header extends React.Component{
    constructor(){
        super()
        this.state = {}
    }
    render(){
        return(
            <div>
                <Navbar
                    link1="home"
                    link2="about"
                />

            </div>
        )
    }
}

export default Header;
import React from 'react';
import Clock from './Clock';


const Navbar = props => {
    return(
        <div>
            <header className="main-header">
                <Clock/>
                <nav className="main-nav">
                    <ul className="nav-list">
                        <li><a href="">{props.link1}</a></li>
                        <li><a href="">{props.link2}</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    )
}

export default Navbar;
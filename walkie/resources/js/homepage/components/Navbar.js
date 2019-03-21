
import React from 'react';
import { Collapse, Navbar, NavbarToggler, NavbarBrand, Nav, NavItem, NavLink, Button } from 'reactstrap';
import './nav.css'

export default class Example extends React.Component {
  constructor(props) {
    super(props);

    this.toggleNavbar = this.toggleNavbar.bind(this);
    this.state = {
      collapsed: true
    };
  }

  toggleNavbar() {
    this.setState({
      collapsed: !this.state.collapsed
    });
  }
  render() {
    return (
      <div>
        <Navbar color="dark" dark>
          <NavbarBrand href="/" className="mr-auto">{this.props.title}</NavbarBrand>
          <Button color="info" className="mx-3">{this.props.btn1}</Button>
          <Button color="danger">{this.props.btn2}</Button>
          <NavbarToggler onClick={this.toggleNavbar} className="mr-2 nav-hamburger" />
          <Collapse isOpen={!this.state.collapsed} navbar>
            <Nav navbar>
              <NavItem>
                <NavLink>Login</NavLink>
              </NavItem>
              <NavItem>
                <NavLink> LogOut </NavLink>
              </NavItem>
            </Nav>
          </Collapse>
        </Navbar>
      </div>
    );
  }
}
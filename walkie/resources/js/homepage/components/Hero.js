import React from 'react';
import {Button, Col, Container, Row } from 'reactstrap';

const Hero = ({hero,text}) => (
        <Container>
            <div className="walkie text-center">
                <h1>{hero}</h1>
                <p>{text}</p>
                <Button outline color="success">Visit <i className="angle right icon"></i> </Button>
            </div>
        </Container>
    );


export default Hero;

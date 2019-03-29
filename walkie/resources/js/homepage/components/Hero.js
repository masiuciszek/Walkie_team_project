import React from 'react';
import {Button} from 'reactstrap';

const Hero = ({hero,text}) => (

            <div className="walkie text-center">
            <h1>{hero}</h1>
            <p>{text}</p>
            <a href="/dog">
                <Button color="success">Visit
                {/* <i className="angle right icon">
                </i> */}
                </Button>
                </a>

        </div>
    );


export default Hero;

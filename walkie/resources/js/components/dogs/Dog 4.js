import React from 'react';
import axios from 'axios';
import Dogs from './Dogs';

class Dog extends React.Component{
    constructor(){
        super()
    }
    render(){
        return(
            <div>
                <Dogs/>
            </div>
        )
    }
}

export default Dog;
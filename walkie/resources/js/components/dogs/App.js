import React from 'react';
import axios from 'axios';
import Dogs from './Dogs';

class App extends React.Component{
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

export default App;
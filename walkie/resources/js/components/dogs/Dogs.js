import React from 'react';
import axios from 'axios';

class Dogs extends React.Component{
    constructor(){
        super()
        this.state = {
            dogs: []
        }
    }
    componentDidMount(){
        axios.get('/api/dog')
            .then(response => {
                this.setState({
                    dogs: response.data
                });
            })
            .catch(error => {
                console.error(error);
            })
    }
    render(){
        return(
            <div>
                {this.state.dogs.map(dog => <p>{dog.name} {dog.sex} {dog.age} </p>)}
            </div>
        )
    }
}

export default Dogs;
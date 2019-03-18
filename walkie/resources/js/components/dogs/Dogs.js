import React from 'react';
import axios from 'axios';
import Button from '@material-ui/core/Button';

class Dogs extends React.Component{
    constructor(){
        super()
        this.state = {
            dogs: []
        }
        this.content = this.content.bind(this);
    }
    componentDidMount(){
        axios.get('/api/dog')
            .then(response => {
                console.log(response.data)
                this.setState({
                    dogs: response.data
                });
            })
            .catch(error => {
                console.error(error);
            })
    }



    content(){
        const dogInfo = this.state.dogs.map(dog => {
           return (
            <div>
                <img key={dog.id} src={`${dog.image}`} />
                <h3> Name: {dog.name} </h3>
                <h3> Age: {dog.age} </h3>
                <h3>Sex: {dog.sex === 0 ? 'male' : 'female' } </h3>
                <p>Breed: {dog.description}  </p>
            </div>
           )
        })
        return dogInfo;
    }
    render(){
        return(
            <div className="ui container">
                {/* {this.state.dogs.map(dog => <p>{dog.name} </p>)} */}
                <Button variant="contained" color="primary">
                        Add a Dog
                </Button>

                    <div className=" about">
                    <div>
                <img key={dog.id} src={`${dog.image}`} />
                <h3> Name: {dog.name} </h3>
                <h3> Age: {dog.age} </h3>
                <h3>Sex: {dog.sex === 0 ? 'male' : 'female' } </h3>
                <p>Breed: {dog.description}  </p>
            </div>
                    </div>
            </div>
        )
    }
}

export default Dogs;
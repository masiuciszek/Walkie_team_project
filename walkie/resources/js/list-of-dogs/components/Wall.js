import React from 'react'
import axios from 'axios'
class Wall extends React.Component {
    
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
        let content = this.content();
        console.log(content)
        return(
            <div className="ui container">
                {/* {this.state.dogs.map(dog => <p>{dog.name} </p>)} */}
                {/* <Button variant="contained" color="primary">
                        Add a Dog
                </Button> */}

                { this.content() }

                    
                
            </div>
        )
    }
}
  
  export default Wall;
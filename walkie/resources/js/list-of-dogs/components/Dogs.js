console.log('it works')
import React from 'react';
import axios from 'axios';
<<<<<<< HEAD
// import Button from '@material-ui/core/Button';
=======
import { Container, Row, Col, Button } from 'reactstrap';
>>>>>>> feat/dev

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
        let style = {width: '300px', height:'250px'}
        const dogInfo = this.state.dogs.map(dog => {
           return (
            <Col md="4" className="text-center my-4" key={dog.id}>
                <img style={style} src={`${dog.image}`} />
                <h3 > Name: {dog.name} </h3>
                <h3 > Age: {dog.age} </h3>
                <h3 >Sex: {dog.sex === 0 ? 'male' : 'female' } </h3>
                <p >Breed: {dog.description}  </p>
                <Button  variant="contained" color="info" href="/dog/id" className="">
                        Dog Profile
                </Button>
            </Col>
           )
        })
        return dogInfo;
    }
    render(){
        return(
<<<<<<< HEAD
            <div className="ui container">
                {/* {this.state.dogs.map(dog => <p>{dog.name} </p>)} */}
                {/* <Button variant="contained" color="primary"> */}
                        {/* Add a Dog */}
                {/* </Button> */}
=======
            <div>
                <Container>
                <Row>
>>>>>>> feat/dev

                {this.content()}

                </Row>
                </Container>
            </div>
        )
    }
}

export default Dogs;
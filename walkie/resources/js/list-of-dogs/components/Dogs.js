console.log('it works')
import React from 'react';
import axios from 'axios';
import { Container, Row, Col, Button } from 'reactstrap';

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
                <Button  variant="contained" color="info" href={"/dog/" + dog.id} className="">
                        Dog Profile
                </Button>
            </Col>
           )
        })
        return dogInfo;
    }
    render(){
        return(
            <div>
                <Container>
                <Row>

                {this.content()}

                </Row>
                </Container>
            </div>
        )
    }
}

export default Dogs;
console.log('it works')
import React from 'react';
import axios from 'axios';
import { Container, Row, Col, Button } from 'reactstrap';

import { Card, CardImg, CardText, CardBody,
    CardTitle } from 'reactstrap';

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
        // let style = {width: '300px', height:'250px'}
        const dogInfo = this.state.dogs.map(dog => {
           return (

            <Col md="6" xl="4" className="text-center my-4" key={dog.id}>
            <div className="card-container">
            <Card className="card-dogs-gallery">
              <CardImg top width="100%" src={`${dog.image}`} alt="dog image cap" />
              <CardBody >
                <CardTitle className="card-title">
                {dog.name}
                </CardTitle>
                <hr></hr>
                {/* <CardSubtitle>Card subtitle</CardSubtitle> */}
                <CardText className="card-text">
                    {/* Age: {dog.age} <br />
                    {dog.sex === 0 ? 'Male' : 'Female' } <br/> */}
                    <p className="dog-description-gallery">{dog.description}</p>
                </CardText>
                {/* <Button  variant="contained" color="info" href={"/dog/" + dog.id} className="card-btn">
                        Dog Profile
                </Button> */}
              </CardBody>
              <Button  variant="contained" color="info" href={"/dog/" + dog.id} className="card-btn">
                       <p> Dog Profile </p>
                </Button>
            </Card>
          </div>
          </Col>


            // <Col md="4" className="text-center my-4" key={dog.id}>
            //     <div className="card-gallery">
            //     <img  src={`${dog.image}`} className="gallery-img"/>
            //     <h3 > Name: {dog.name} </h3>
            //     <h3 > Age: {dog.age} </h3>
            //     <h3 >Sex: {dog.sex === 0 ? 'male' : 'female' } </h3>
            //     <p >Breed: {dog.description}  </p>
            //     <Button  variant="contained" color="info" href={"/dog/" + dog.id} className="">
            //             Dog Profile
            //     </Button>
            //     </div>
            // </Col>
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
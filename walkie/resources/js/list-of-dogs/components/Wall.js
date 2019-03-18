import React from 'react'
import axios from 'axios'
class Wall extends React.Component {
    
    constructor(props) {
        super(props) 
        this.state = {
            dogs: []
        }
    }

    componentDidMount() {
        axios.get('/api/dog')
        .then(res=> { 
           
            console.log(res)

            this.setState({
                    dogs: res.data
                    })

        })    
      }
  
    render() {
      
      return (
        <div className="test">
            <h1>elko</h1>
        </div>
      );
    }
  }
  
  export default Wall;
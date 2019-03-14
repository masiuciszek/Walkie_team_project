import React from 'react';
import AdminForm from './AdminForm';
import axios from 'axios';

class Admin extends React.Component{
    constructor(){
        super()
        state = {
            users:[]
        }
    }
    componentDidMount(){
        axios.get('/api/admin')
        .then(response => {
            console.log(response.data);
            this.setState({
                users: response.data
            })
        })
        .catch(err => console.error(err));
    }
    render(){
        return(
            <div>
                <h1>{this.state.users.name}</h1>
            </div>
        )
    }
}

export default Admin;
if (document.getElementById('admin')) {
    ReactDOM.render(<Admin />, document.getElementById('admin'));
}

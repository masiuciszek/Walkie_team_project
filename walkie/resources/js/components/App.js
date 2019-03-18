import React, { Component } from 'react';
import Header from './header/Header';
import Dog from './dogs/Dogs';
import Admin from './admin/Admin';

 class App extends Component {
    render() {
        return (
            <div>
                <Header/>
                 <Dog/>
                <Admin/>
            </div>
        );
    }
}

export default App;
if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}

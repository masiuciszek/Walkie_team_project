import React from 'react';
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from 'reactstrap';

class Modal1 extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      modal: false
    };

    this.toggle = this.toggle.bind(this);
  }

  toggle() {
    this.setState(prevState => ({
      modal: !prevState.modal
    }));
  }

  render() {
    return (
      <div>
        <Button color="light" className="mx-3" onClick={this.toggle}>{this.props.buttonLabel}</Button>
        <Modal isOpen={this.state.modal} toggle={this.toggle} className={this.props.className}>
          <ModalHeader toggle={this.toggle}>{this.props.modalHeader}</ModalHeader>
          <ModalBody>
            To adopt our puppies, or to take them for a walk you need to be registered. If you don't have an account you can register. It's free and it will bring you joy! If you are registered you can log in! 
          </ModalBody>
          <ModalFooter>
            <Button color="info" href="/login" onClick={this.toggle}>{this.props.login}</Button>{' '}
            <Button color="danger" onClick={this.toggle}>{this.props.cancel}</Button>
          </ModalFooter>
        </Modal>
      </div>
    );
  }
}

export default Modal1;
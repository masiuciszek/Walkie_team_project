import React from 'react';
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from 'reactstrap';

class Modal2 extends React.Component {
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
        <Button color="warning" className="" onClick={this.toggle}>{this.props.buttonLabel}</Button>
        <Modal isOpen={this.state.modal} toggle={this.toggle} className={this.props.className}>
          <ModalHeader toggle={this.toggle}>{this.props.modalHeader}</ModalHeader>
          <ModalBody>
            Here you can create your account. It's free and without it you can't adopt a puppy or even take it for a walk. Create an account, it's worth it!
          </ModalBody>
          <ModalFooter>
            <Button color="warning" href="/register" onClick={this.toggle}>{this.props.register}</Button>{' '}
            <Button color="danger" onClick={this.toggle}>{this.props.cancel}</Button>
          </ModalFooter>
        </Modal>
      </div>
    );
  }
}

export default Modal2;
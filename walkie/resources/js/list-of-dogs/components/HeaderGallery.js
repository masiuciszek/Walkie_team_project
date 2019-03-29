import React from 'react';
import { Spring,Transition } from 'react-spring/renderprops'

const HeaderGallery = (props) => (
        <Spring
          from={{
               opacity: 0,
               shape: 'M20,380 L380,380 L380,380 L200,20 L20,380 Z',
               textShadow: '0px 5px 0px white'
                }}

          to={{
              opacity: 1,
              textShadow: '12px 7px 7px 6px #000',
              shape: 'M20,20 L20,380 L380,380 L380,20 L20,20 Z',
              textShadow: '0px 5px 15px rgba(255,255,255,0.5)',

               }}
          config={{
              duration: 3700,

               }}
        >
            {props => (
                <div style={props}>
                    <div className="header-gallery">
                        <h1 className="title-gallery">Our Dogs</h1>
                        <p className="description-gallery">Here is a list of our dogs that you can take for a walk or adopt.<br/><br/> #adoptdontshop</p>
                        <hr className="hr-gallery"/>
                    </div>
                </div>
            )}
        </Spring>
    );


export default HeaderGallery;
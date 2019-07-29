import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import PropTypes from 'prop-types';

class CardImage extends Component {
    render() {
        const {
            title,
            imgUrl,
            altText,
          } = this.props;
        return (
            <div className="col-md-4">
                <div className="card card-img">
                    <img className="card-img-top" src={imgUrl} alt={altText} />
                    <div className="card-body">
                        <h5 className="card-title">{title}</h5>
                    </div>
                </div>
            </div>
        );
    }
}

CardImage.propTypes = {
    altText: PropTypes.string.isRequired,
    imgUrl: PropTypes.string.isRequired,
    title: PropTypes.string.isRequired,
};

export default CardImage;
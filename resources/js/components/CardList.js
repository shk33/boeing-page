import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import CardImage from './CardImage';

class CardList extends Component {
    render() {
        const cards = [
            {key: '1', title: 'Boeing in space', imgUrl: `${imagePath}/card1.jpg`, altText: 'card1',},
            {key: '2', title: 'Carrers at Boeing', imgUrl: `${imagePath}/card2.jpg`, altText: 'card2',},
            {key: '3', title: 'News', imgUrl: `${imagePath}/card3.jpg`, altText: 'card3',},
        ]
        return (
            <div className="row justify-content-center">
                {cards.map( card => {
                    const {title, imgUrl, altText, key} = card;
                    return (
                        <CardImage key={key} title={title} imgUrl={imgUrl} altText={altText} />
                    );
                })}
            </div>
        );
    }
}

export default CardList;

if (document.getElementById('card-list')) {
    ReactDOM.render(<CardList />, document.getElementById('card-list'));
}

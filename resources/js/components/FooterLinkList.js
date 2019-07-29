import React, { Component } from 'react';
import PropTypes from 'prop-types';

class FooterLinkList extends Component {
    render() {
        const {
            title,
            links,
          } = this.props;
        return (
            <div className="col-12 col-md">
                <h5 className="footer-list-title">{title}</h5>
                <ul className="list-unstyled text-small">
                    {links.map( link => {
                        const {name, url} = link;
                        return (
                            <li><a className="text-muted" href={url}>{name}</a></li>        
                        );
                    })}
                </ul>
            </div>
        );
    }
}

FooterLinkList.propTypes = {
    title: PropTypes.string.isRequired,
    links: PropTypes.array.isRequired,
};

export default FooterLinkList;
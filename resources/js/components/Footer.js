import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import FooterLinkList from './FooterLinkList';

class Footer extends Component {
    render() {
        const lists = [
            { 
                title: 'Utilities',
                links: [
                    {name: 'News', url:'#'},
                    {name: 'Investors', url:'#'},
                    {name: 'Employee/Retiree', url:'#'},
                    {name: 'Merchandise', url:'#'},
                    {name: 'Suppliers', url:'#'},
                    {name: 'Features & Multimedia', url:'#'},
                ]
            },
            {
                title: 'Categories',
                links: [
                    {name: 'Commercial', url:'#'},
                    {name: 'Defense', url:'#'},
                    {name: 'Services', url:'#'},
                    {name: 'Innovation', url:'#'},
                    {name: 'Our History', url:'#'},
                    {name: 'Global', url:'#'},
                    {name: 'Our Principles', url:'#'},
                    {name: 'Careers', url:'#'},
                    {name: 'Our Company', url:'#'},
                ]
            },
            {
                title: 'Popular Links',
                links: [
                    {name: 'Orders & Deliveries', url:'#'},
                    {name: 'Frontiers Magazine', url:'#'},
                    {name: 'Tours', url:'#'},
                    {name: 'Ethics Line', url:'#'},
                    {name: 'Licensing', url:'#'},
                    {name: 'Investment Recovery', url:'#'},
                    {name: 'Frequently Requested', url:'#'},
                    {name: 'Contact Us', url:'#'},
                ]
            },
            {
                title: 'Follow Boeing',
                links: [
                    {name: 'Instagram', url:'#'},
                    {name: 'Follow on Facebook', url:'#'},
                    {name: 'Follow on Twitter', url:'#'},
                    {name: 'Follow on YouTube', url:'#'},
                    {name: 'Follow on LinkedIn', url:'#'},
                    {name: 'All Social Channels', url:'#'},
                ],
            }
        ]
        return (
            <div className="row justify-content-center footer-row">
                {lists.map( list => {
                    const {title, links} = list;
                    return (
                        <FooterLinkList key={title} title={title} links={links} />
                    );
                })}
            </div>
        );
    }
}

export default Footer;

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}

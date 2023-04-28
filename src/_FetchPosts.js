// import { TextControl, Flex, FlexBlock, FlexItem, Button, Icon } from "@wordpress/components";

import React from "react";

const BLOCK_NAME = "custom-block/fetchposts";

const all_attributes = {
  // posts: { type: "string" },
  // className: { type: "string" },
  // setAttributes: { type: "string" },
};

wp.blocks.registerBlockType(BLOCK_NAME, {
  title: "Fetch Posts",
  icon: "smiley",
  category: "common",
  attributes: all_attributes,
  edit: EditComponent,
  save: function () {
    return null;
  },
})
/* 
function EditComponent(props) {

  const {
    posts
  } = props.attributes;

  return (
    <div className={props.className}>
      <p>helloworld</p>

      <select>
        <option></option>
        <option></option>
      </select>

      <textarea></textarea>
    </div>
  )
} */

function EditComponent(props) {
  const [getPosts, setPosts] = React.useState([]);
  const [selectedPostId, setSelectedPostId] = React.useState('');
  const [selectedPostData, setSelectedPostData] = React.useState({});

  const {
    attributes: {
      posts
    },
    className,
    setAttributes,
  } = props;

  React.useEffect(() => {
    // Fetch posts
    fetch('/wp-json/wp/v2/posts')
      .then(response => response.json())
      .then(posts => {
        setPosts(posts);
        setSelectedPostId(posts[0].id);
      })
      .catch(error => console.error(error));
  }, []);

  /* React.useEffect(() => {
    // Fetch custom fields for the selected post
    fetch(`/wp-json/wp/v2/posts/${selectedPostId}?_fields=custom_fields`)
      .then(response => response.json())
      .then(postData => {
        setSelectedPostData(postData.custom_fields);
      })
      .catch(error => console.error(error));
  }, [selectedPostId]);

  const handlePostChange = (event) => {
    setSelectedPostId(event.target.value);
  };

  const handleSave = () => {
    const selectedPost = posts.find(post => post.id === parseInt(selectedPostId));
    const data = {
      title: selectedPost.title.rendered,
      customFields: selectedPostData,
    };
    setAttributes({ posts: JSON.stringify(data) });
  }; */

  return (
    <div className={className}>
      <p>helloworld</p>
      {/* <select onChange={handlePostChange} value={selectedPostId}>
        {posts.map(post => (
          <option key={post.id} value={post.id}>{post.title.rendered}</option>
        ))}
      </select>
      <textarea value={JSON.stringify(posts)} onChange={handleSave}></textarea> */}
    </div>
  );
}
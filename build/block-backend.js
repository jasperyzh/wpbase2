/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/_BootstrapCard.js":
/*!*******************************!*\
  !*** ./src/_BootstrapCard.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__);


const BLOCK_NAME = "custom-block/bootstrap5";
const all_attributes = {
  img_url: {
    type: "string"
  },
  title: {
    type: "string"
  },
  description: {
    type: "string"
  },
  href: {
    type: "string"
  },
  label: {
    type: "string"
  },
  question: {
    type: "string"
  },
  answers: {
    type: "array",
    default: ["red", "blue", "green"]
  },
  correctAnswer: {
    type: "number",
    default: undefined
  }
};
(() => {
  // validate block before enables wp:Update 
  let locked = false;
  wp.data.subscribe(() => {
    const results = wp.data.select("core/block-editor").getBlocks().filter(block => {
      return block.name == BLOCK_NAME && block.attributes.correctAnswer == undefined;
    });
    if (results.length && locked == false) {
      locked = true;
      wp.data.dispatch("core/editor").lockPostSaving("noanswer");
    }
    if (!results.length && locked) {
      locked = false;
      wp.data.dispatch("core/editor").unlockPostSaving("noanswer");
    }
  });
})();
wp.blocks.registerBlockType(BLOCK_NAME, {
  title: "bootstrap5: Card",
  icon: "smiley",
  category: "common",
  attributes: all_attributes,
  edit: EditComponent,
  save: function () {
    return null;
  }
});
function EditComponent(props) {
  function update_img_url(event) {
    props.setAttributes({
      img_url: event.target.value
    });
  }
  function update_title(event) {
    props.setAttributes({
      title: event.target.value
    });
  }
  function update_description(event) {
    props.setAttributes({
      description: event.target.value
    });
  }
  function update_href(event) {
    props.setAttributes({
      href: event.target.value
    });
  }
  function update_label(event) {
    props.setAttributes({
      label: event.target.value
    });
  }
  function updateQuestion(value) {
    props.setAttributes({
      question: value
    });
  }
  const {
    img_url,
    title,
    description,
    href,
    label,
    question,
    answers,
    correctAnswer
  } = props.attributes;
  function deleteAnswer(indexToDelete) {
    const newAnswers = answers.filter((x, index) => {
      return index != indexToDelete;
    });
    props.setAttributes({
      answers: newAnswers
    });
    if (indexToDelete == correctAnswer) {
      props.setAttributes({
        correctAnswer: undefined
      });
    }
  }
  function markAsCorrect(index) {
    props.setAttributes({
      correctAnswer: index
    });
  }
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: props.className
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextControl, {
    label: "Questions:",
    style: {
      fontSize: "1.25rem"
    },
    value: question,
    onChange: updateQuestion
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", {
    style: {
      fontSize: "1.05rem",
      margin: "1rem 0 .5rem 0"
    }
  }, "Answers: "), answers.map((answer, index) => (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Flex, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.FlexBlock, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.TextControl, {
    value: answer,
    onChange: newValue => {
      const newAnswer = answers.concat([]);
      newAnswer[index] = newValue;
      props.setAttributes({
        answers: newAnswer
      });
    },
    autoFocus: answer == undefined
  })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.FlexItem, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Button, {
    onClick: () => markAsCorrect(index)
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Icon, {
    className: "item--correct",
    icon: correctAnswer == index ? "star-filled" : "star-empty"
  }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.FlexItem, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Button, {
    isLink: true,
    className: "item--delete",
    onClick: () => deleteAnswer(index)
  }, "Delete")))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__.Button, {
    isPrimary: true,
    onClick: () => props.setAttributes({
      answers: answers.concat([undefined])
    })
  }, "Add another answer"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("hr", null), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    style: {
      display: 'flex',
      flexDirection: 'column'
    }
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "img_url"
  }, "img_url"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    id: "img_url",
    placeholder: "img_url",
    value: img_url,
    onChange: update_img_url
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "title"
  }, "title"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    id: "title",
    placeholder: "title",
    value: title,
    onChange: update_title
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "description"
  }, "description"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("textarea", {
    type: "text",
    id: "description",
    placeholder: "description",
    rows: 4,
    value: description,
    onChange: update_description
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "href"
  }, "href"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    id: "href",
    placeholder: "href",
    value: href,
    onChange: update_href
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("label", {
    htmlFor: "label"
  }, "Button Label"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("input", {
    type: "text",
    id: "label",
    placeholder: "label",
    value: label,
    onChange: update_label
  })));
}

/***/ }),

/***/ "./src/_FetchPosts.js":
/*!****************************!*\
  !*** ./src/_FetchPosts.js ***!
  \****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);

// import { TextControl, Flex, FlexBlock, FlexItem, Button, Icon } from "@wordpress/components";


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
  }
});
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
  const [getPosts, setPosts] = react__WEBPACK_IMPORTED_MODULE_1___default().useState([]);
  const [selectedPostId, setSelectedPostId] = react__WEBPACK_IMPORTED_MODULE_1___default().useState('');
  const [selectedPostData, setSelectedPostData] = react__WEBPACK_IMPORTED_MODULE_1___default().useState({});
  const {
    attributes: {
      posts
    },
    className,
    setAttributes
  } = props;
  react__WEBPACK_IMPORTED_MODULE_1___default().useEffect(() => {
    // Fetch posts
    fetch('/wp-json/wp/v2/posts').then(response => response.json()).then(posts => {
      setPosts(posts);
      setSelectedPostId(posts[0].id);
    }).catch(error => console.error(error));
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

  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    className: className
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, "helloworld"));
}

/***/ }),

/***/ "./src/block-backend.scss":
/*!********************************!*\
  !*** ./src/block-backend.scss ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/***/ (function(module) {

module.exports = window["React"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ (function(module) {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ (function(module) {

module.exports = window["wp"]["element"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!******************************!*\
  !*** ./src/block-backend.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _block_backend_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./block-backend.scss */ "./src/block-backend.scss");
/* harmony import */ var _BootstrapCard__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./_BootstrapCard */ "./src/_BootstrapCard.js");
/* harmony import */ var _FetchPosts__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./_FetchPosts */ "./src/_FetchPosts.js");



}();
/******/ })()
;
//# sourceMappingURL=block-backend.js.map
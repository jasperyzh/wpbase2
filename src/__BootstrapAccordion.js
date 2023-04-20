
import { TextControl, Flex, FlexBlock, FlexItem, Button, Icon } from "@wordpress/components";

const BLOCK_NAME = "custom-block/bootstrap5";

const all_attributes = {
  img_url: { type: "string" },
  title: { type: "string" },
  description: { type: "string" },
  href: { type: "string" },
  label: { type: "string" },
  question: { type: "string" },
  answers: { type: "array", default: ["red", "blue", "green"] },
  correctAnswer: { type: "number", default: undefined }

};

(() => {
  // validate block before enables wp:Update 
  let locked = false;

  wp.data.subscribe(() => {
    const results = wp.data.select("core/block-editor").getBlocks().filter(block => {
      return block.name == BLOCK_NAME && block.attributes.correctAnswer == undefined
    })

    if (results.length && locked == false) {
      locked = true;
      wp.data.dispatch("core/editor").lockPostSaving("noanswer");
    }

    if (!results.length && locked) {
      locked = false;
      wp.data.dispatch("core/editor").unlockPostSaving("noanswer");
    }
  })
})();

wp.blocks.registerBlockType(BLOCK_NAME, {
  title: "bootstrap5: Card",
  icon: "smiley",
  category: "common",
  attributes: all_attributes,
  edit: EditComponent,
  save: function () {
    return null;
  },
})

function EditComponent(props) {
    
  function update_img_url(event) {
    props.setAttributes({ img_url: event.target.value })
  }
  function update_title(event) {
    props.setAttributes({ title: event.target.value })
  }
  function update_description(event) {
    props.setAttributes({ description: event.target.value })
  }
  function update_href(event) {
    props.setAttributes({ href: event.target.value })
  }
  function update_label(event) {
    props.setAttributes({ label: event.target.value })
  }
  function updateQuestion(value) {
    props.setAttributes({ question: value });
  }

  const {
    img_url,
    title,
    description,
    href,
    label,
    question, answers, correctAnswer } = props.attributes

  function deleteAnswer(indexToDelete) {
    const newAnswers = answers.filter((x, index) => {
      return index != indexToDelete
    })
    props.setAttributes({ answers: newAnswers })

    if (indexToDelete == correctAnswer) {
      props.setAttributes({ correctAnswer: undefined })
    }
  }

  function markAsCorrect(index) {
    props.setAttributes({ correctAnswer: index })
  }

  return (
    <div className={props.className}>

      <TextControl label="Questions:" style={{ fontSize: "1.25rem" }} value={question} onChange={updateQuestion} />
      <p style={{ fontSize: "1.05rem", margin: "1rem 0 .5rem 0" }}>Answers: </p>

      {answers.map((answer, index) => (

        <Flex>
          <FlexBlock>
            <TextControl value={answer} onChange={newValue => {
              const newAnswer = answers.concat([]);
              newAnswer[index] = newValue;
              props.setAttributes({ answers: newAnswer })
            }}
              autoFocus={answer == undefined}
            ></TextControl>
          </FlexBlock>
          <FlexItem>
            <Button onClick={() => markAsCorrect(index)}>
              <Icon className="item--correct" icon={correctAnswer == index ? "star-filled" : "star-empty"}></Icon>
            </Button>
          </FlexItem>
          <FlexItem>
            <Button isLink className="item--delete" onClick={() => deleteAnswer(index)}>Delete</Button>
          </FlexItem>
        </Flex>
      ))}

      <Button isPrimary onClick={() => props.setAttributes({ answers: answers.concat([undefined]) })}>Add another answer</Button>

      <hr />
      <div style={{ display: 'flex', flexDirection: 'column' }}>
        <label htmlFor="img_url">img_url</label>
        <input type="text" id="img_url" placeholder="img_url" value={img_url} onChange={update_img_url} />


        <label htmlFor="title">title</label>
        <input type="text" id="title" placeholder="title" value={title} onChange={update_title} />

        <label htmlFor="description">description</label>
        <textarea type="text" id="description" placeholder="description" rows={4} value={description} onChange={update_description} />

        <label htmlFor="href">href</label>
        <input type="text" id="href" placeholder="href" value={href} onChange={update_href} />

        <label htmlFor="label">Button Label</label>
        <input type="text" id="label" placeholder="label" value={label} onChange={update_label} />
      </div>
    </div>
  )
}
<?php
/**
 * Autotype block
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<h1>
  <?php echo $attributes['static-text']; ?>
  <span is="type-async" id="type-text"></span>

  <!-- <span class="autotyping">
    <?php foreach( $attributes['typing-list'] as $inner ): ?>
      <span><?php echo $inner['item']; ?></span>
    <?php endforeach; ?>
  <span> -->
</h1>

<script>
  async function init () {
    const node = document.querySelector("#type-text")
    await sleep(1000)
    node.innerText = ""
    await node.type('')
    
    while (true) {
      <?php foreach( $attributes['typing-list'] as $inner ): ?>
        await node.type('<?php echo $inner['item']; ?>')
        await sleep(2000)
        await node.delete('<?php echo $inner['item']; ?>')
      <?php endforeach; ?>
    }
  }

  const sleep = time => new Promise(resolve => setTimeout(resolve, time))

  class TypeAsync extends HTMLSpanElement {
    get typeInterval () {
      const randomMs = 100 * Math.random()
      return randomMs < 50 ? 10 : randomMs
    }
    
    async type (text) {
      for (let character of text) {
        this.innerText += character
        await sleep(this.typeInterval)
      }
    }
    
    async delete (text) {
      for (let character of text) {
        this.innerText = this.innerText.slice(0, this.innerText.length -1)
        await sleep(this.typeInterval)
      }
    }
  }
  customElements.define('type-async', TypeAsync, { extends: 'span' })
  init()

</script>
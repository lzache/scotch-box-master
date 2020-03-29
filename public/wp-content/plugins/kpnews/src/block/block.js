/**
 * BLOCK: kpnews
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './editor.scss';
import './style.scss';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { RichText, PlainText, MediaUpload, MediaUploadCheck } = wp.blockEditor;


/**
 * Register: aa Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType( 'lz-plugin/kpnews', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __( 'KP News Block' ), // Block title.
	icon: 'lightbulb', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	keywords: [
		__( 'kp news' ),
	],

	attributes: {
		newspost: {
			type: 'string',
			source: 'text',
			selector: '.newspost'
		},

		title: {
			type: 'string',
			source: 'text',
			selector: '.title',
		},

		date: {
			type: 'string',
			source: 'text',
			selector: '.date',
		},

		imgUrl: {
			type: 'string',
			default: 'https://placehold.it/200',
		},


	},




	/**
	 * The edit function describes the structure of your block in the context of the editor.
	 * This represents what the editor will render when the block is used.
	 *
	 * The "edit" property must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Component.
	 */
	edit: ( props ) => {
		let {attributes: { newspost, title, date, imgUrl }, setAttributes, className } = props;

		function changeNewsPost(value){
			setAttributes({newspost: value});
		}

		function changeTitle(value){
			setAttributes({title: value});
		}

		function changeDate(value){
			setAttributes({date: value});
		}

		function selectImage(value){
			setAttributes( {imgUrl: value.sizes.medium.url} );
		}


		// Creates a <p class='wp-block-cgb-block-kpnews'></p>.
		return (
			<div className={ props.className }>

				<RichText className= "title"
						   value={title}
						   onChange={changeTitle}
						   placeholder="Title Here" />

				<PlainText className="date"
						   value={date}
						   onChange={changeDate}
						   placeholder="Date" />

				<RichText className= "newspost"
						  	value={newspost}
						  	onChange={changeNewsPost}
						  	placeholder="Enter News Here"/>

				<div className="photo">
					<MediaUploadCheck>
						<MediaUpload
							on Select={selectImage}
							render={({open}) =>
							<img src={imgUrl} onClick={open} />
							}
						/>
					</MediaUploadCheck>
				</div>

			</div>
		);
	},

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by Gutenberg into post_content.
	 *
	 * The "save" property must be specified and must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Frontend HTML.
	 */
	save: ( props ) => {
		return (
			<div className={ props.className }>

				<div className="text">
					<p className="title">{props.attributes.title}</p>
					<p className="date">{props.attributes.date}</p>
					<p className="newspost">{props.attributes.newspost}</p>
					<div className="photo">
						<img src={props.attributes.imgUrl} />
					</div>
				</div>

			</div>
		);
	},
} );

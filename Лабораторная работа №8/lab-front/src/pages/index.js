import React from "react"
import { Link, graphql } from "gatsby"
import Layout from '../components/layout'

const IndexPage = ({data}) => (
	<Layout>
    <ul>
      {data.allStrapiMatches.edges.map(document => (
        <li key={document.node.id}>
        <p><Link to={`/${document.node.id}`}>{document.node.id}</Link> | {document.node.date} {document.node.time}</p>
        {document.node.partisipants.map(document =>(
          <lu>
          <h5><Link to={`/Teams_${document.id}`}>{document.title}</Link></h5>
          </lu>
          ))}
          <p>{document.node.result}</p>
        </li>
      ))}
    </ul>
    </Layout>
)

export default IndexPage
export const pageQuery = graphql`
query IndexQuery {
    allStrapiMatches {
      edges {
        node {
        	id
        	time
        	date
        	result
          ended
        	partisipants{
            id
            title
        	}
        }
      }
    }

  }
`
